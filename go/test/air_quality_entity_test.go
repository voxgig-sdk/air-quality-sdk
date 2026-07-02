package sdktest

import (
	"encoding/json"
	"os"
	"path/filepath"
	"runtime"
	"strings"
	"testing"
	"time"

	sdk "github.com/voxgig-sdk/air-quality-sdk/go"
	"github.com/voxgig-sdk/air-quality-sdk/go/core"

	vs "github.com/voxgig-sdk/air-quality-sdk/go/utility/struct"
)

func TestAirQualityEntity(t *testing.T) {
	t.Run("instance", func(t *testing.T) {
		testsdk := sdk.TestSDK(nil, nil)
		ent := testsdk.AirQuality(nil)
		if ent == nil {
			t.Fatal("expected non-nil AirQualityEntity")
		}
	})

	t.Run("basic", func(t *testing.T) {
		setup := air_qualityBasicSetup(nil)
		// Per-op sdk-test-control.json skip — basic test exercises a flow
		// with multiple ops; skipping any op skips the whole flow.
		_mode := "unit"
		if setup.live {
			_mode = "live"
		}
		for _, _op := range []string{"load"} {
			if _shouldSkip, _reason := isControlSkipped("entityOp", "air_quality." + _op, _mode); _shouldSkip {
				if _reason == "" {
					_reason = "skipped via sdk-test-control.json"
				}
				t.Skip(_reason)
				return
			}
		}
		// The basic flow consumes synthetic IDs from the fixture. In live mode
		// without an *_ENTID env override, those IDs hit the live API and 4xx.
		if setup.syntheticOnly {
			t.Skip("live entity test uses synthetic IDs from fixture — set AIRQUALITY_TEST_AIR_QUALITY_ENTID JSON to run live")
			return
		}
		client := setup.client

		// Bootstrap entity data from existing test data (no create step in flow).
		airQualityRef01DataRaw := vs.Items(core.ToMapAny(vs.GetPath("existing.air_quality", setup.data)))
		var airQualityRef01Data map[string]any
		if len(airQualityRef01DataRaw) > 0 {
			airQualityRef01Data = core.ToMapAny(airQualityRef01DataRaw[0][1])
		}
		// Discard guards against Go's unused-var check when the flow's steps
		// happen not to consume the bootstrap data (e.g. list-only flows).
		_ = airQualityRef01Data

		// LOAD
		airQualityRef01Ent := client.AirQuality(nil)
		airQualityRef01MatchDt0 := map[string]any{}
		airQualityRef01DataDt0Loaded, err := airQualityRef01Ent.Load(airQualityRef01MatchDt0, nil)
		if err != nil {
			t.Fatalf("load failed: %v", err)
		}
		if airQualityRef01DataDt0Loaded == nil {
			t.Fatal("expected load result to be non-nil")
		}

	})
}

func air_qualityBasicSetup(extra map[string]any) *entityTestSetup {
	loadEnvLocal()

	_, filename, _, _ := runtime.Caller(0)
	dir := filepath.Dir(filename)

	entityDataFile := filepath.Join(dir, "..", "..", ".sdk", "test", "entity", "air_quality", "AirQualityTestData.json")

	entityDataSource, err := os.ReadFile(entityDataFile)
	if err != nil {
		panic("failed to read air_quality test data: " + err.Error())
	}

	var entityData map[string]any
	if err := json.Unmarshal(entityDataSource, &entityData); err != nil {
		panic("failed to parse air_quality test data: " + err.Error())
	}

	options := map[string]any{}
	options["entity"] = entityData["existing"]

	client := sdk.TestSDK(options, extra)

	// Generate idmap via transform, matching TS pattern.
	idmap := vs.Transform(
		[]any{"air_quality01", "air_quality02", "air_quality03"},
		map[string]any{
			"`$PACK`": []any{"", map[string]any{
				"`$KEY`": "`$COPY`",
				"`$VAL`": []any{"`$FORMAT`", "upper", "`$COPY`"},
			}},
		},
	)

	// Detect ENTID env override before envOverride consumes it. When live
	// mode is on without a real override, the basic test runs against synthetic
	// IDs from the fixture and 4xx's. Surface this so the test can skip.
	entidEnvRaw := os.Getenv("AIRQUALITY_TEST_AIR_QUALITY_ENTID")
	idmapOverridden := entidEnvRaw != "" && strings.HasPrefix(strings.TrimSpace(entidEnvRaw), "{")

	env := envOverride(map[string]any{
		"AIRQUALITY_TEST_AIR_QUALITY_ENTID": idmap,
		"AIRQUALITY_TEST_LIVE":      "FALSE",
		"AIRQUALITY_TEST_EXPLAIN":   "FALSE",
		"AIRQUALITY_APIKEY":         "NONE",
	})

	idmapResolved := core.ToMapAny(env["AIRQUALITY_TEST_AIR_QUALITY_ENTID"])
	if idmapResolved == nil {
		idmapResolved = core.ToMapAny(idmap)
	}

	if env["AIRQUALITY_TEST_LIVE"] == "TRUE" {
		mergedOpts := vs.Merge([]any{
			map[string]any{
				"apikey": env["AIRQUALITY_APIKEY"],
			},
			extra,
		})
		client = sdk.NewAirQualitySDK(core.ToMapAny(mergedOpts))
	}

	live := env["AIRQUALITY_TEST_LIVE"] == "TRUE"
	return &entityTestSetup{
		client:        client,
		data:          entityData,
		idmap:         idmapResolved,
		env:           env,
		explain:       env["AIRQUALITY_TEST_EXPLAIN"] == "TRUE",
		live:          live,
		syntheticOnly: live && !idmapOverridden,
		now:           time.Now().UnixMilli(),
	}
}
