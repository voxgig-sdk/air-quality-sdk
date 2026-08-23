package core

import (
	"sync"
)

// MakeConfig builds a fresh, fully materialised config map. Every call
// rebuilds the whole structure, so prefer SharedConfig unless you need a
// private copy you intend to mutate.
func MakeConfig() map[string]any {
	return map[string]any{
		"main": map[string]any{
			"name": "AirQuality",
			"slug": "air-quality",
			"version": "0.0.1",
			"target": "go",
		},
		"feature": map[string]any{
			"test": map[string]any{
				"options": map[string]any{
					"active": false,
				},
			},
		},
		"options": map[string]any{
			"base": "https://air-quality-api.open-meteo.com",
			"auth": map[string]any{
				"prefix": "",
			},
			"headers": map[string]any{
				"content-type": "application/json",
			},
			"entity": map[string]any{
				"air_quality": map[string]any{},
			},
		},
		"entity": map[string]any{
			"air_quality": map[string]any{
				"fields": []any{
					map[string]any{
						"name": "current",
						"short": "Current conditions data",
						"type": "`$OBJECT`",
					},
					map[string]any{
						"name": "current_units",
						"short": "Units for current conditions variables",
						"type": "`$OBJECT`",
					},
					map[string]any{
						"name": "elevation",
						"short": "Elevation in meters of the selected grid cell",
						"type": "`$NUMBER`",
					},
					map[string]any{
						"name": "generationtime_ms",
						"short": "Generation time of the forecast in milliseconds",
						"type": "`$NUMBER`",
					},
					map[string]any{
						"name": "hourly",
						"short": "Hourly forecast data",
						"type": "`$OBJECT`",
					},
					map[string]any{
						"name": "hourly_units",
						"short": "Units for each hourly variable",
						"type": "`$OBJECT`",
					},
					map[string]any{
						"name": "latitude",
						"short": "WGS84 latitude of the center of the weather grid-cell used for the forecast",
						"type": "`$NUMBER`",
					},
					map[string]any{
						"name": "longitude",
						"short": "WGS84 longitude of the center of the weather grid-cell used for the forecast",
						"type": "`$NUMBER`",
					},
					map[string]any{
						"name": "timezone",
						"short": "Timezone identifier (e.g., Europe/Berlin)",
						"type": "`$STRING`",
					},
					map[string]any{
						"name": "timezone_abbreviation",
						"short": "Timezone abbreviation (e.g., CEST)",
						"type": "`$STRING`",
					},
					map[string]any{
						"name": "utc_offset_seconds",
						"short": "Applied timezone offset in seconds",
						"type": "`$INTEGER`",
					},
				},
				"name": "air_quality",
				"op": map[string]any{
					"load": map[string]any{
						"input": "data",
						"name": "load",
						"points": []any{
							map[string]any{
								"args": map[string]any{
									"query": []any{
										map[string]any{
											"kind": "query",
											"name": "apikey",
											"orig": "apikey",
											"type": "`$STRING`",
										},
										map[string]any{
											"example": "nearest",
											"kind": "query",
											"name": "cell_selection",
											"orig": "cell_selection",
											"type": "`$STRING`",
										},
										map[string]any{
											"example": "european_aqi,pm10,pm2_5",
											"kind": "query",
											"name": "current",
											"orig": "current",
											"type": "`$ANY`",
										},
										map[string]any{
											"example": "auto",
											"kind": "query",
											"name": "domain",
											"orig": "domain",
											"type": "`$STRING`",
										},
										map[string]any{
											"example": "2024-01-07",
											"kind": "query",
											"name": "end_date",
											"orig": "end_date",
											"type": "`$STRING`",
										},
										map[string]any{
											"example": "2024-01-07T23:00",
											"kind": "query",
											"name": "end_hour",
											"orig": "end_hour",
											"type": "`$STRING`",
										},
										map[string]any{
											"example": 5,
											"kind": "query",
											"name": "forecast_day",
											"orig": "forecast_day",
											"type": "`$INTEGER`",
										},
										map[string]any{
											"kind": "query",
											"name": "forecast_hour",
											"orig": "forecast_hour",
											"type": "`$INTEGER`",
										},
										map[string]any{
											"example": "pm10,pm2_5,european_aqi",
											"kind": "query",
											"name": "hourly",
											"orig": "hourly",
											"type": "`$ANY`",
										},
										map[string]any{
											"example": 52.52,
											"kind": "query",
											"name": "latitude",
											"orig": "latitude",
											"reqd": true,
											"type": "`$NUMBER`",
										},
										map[string]any{
											"example": 13.419,
											"kind": "query",
											"name": "longitude",
											"orig": "longitude",
											"reqd": true,
											"type": "`$NUMBER`",
										},
										map[string]any{
											"example": 0,
											"kind": "query",
											"name": "past_day",
											"orig": "past_day",
											"type": "`$INTEGER`",
										},
										map[string]any{
											"kind": "query",
											"name": "past_hour",
											"orig": "past_hour",
											"type": "`$INTEGER`",
										},
										map[string]any{
											"example": "2024-01-01",
											"kind": "query",
											"name": "start_date",
											"orig": "start_date",
											"type": "`$STRING`",
										},
										map[string]any{
											"example": "2024-01-01T00:00",
											"kind": "query",
											"name": "start_hour",
											"orig": "start_hour",
											"type": "`$STRING`",
										},
										map[string]any{
											"example": "iso8601",
											"kind": "query",
											"name": "timeformat",
											"orig": "timeformat",
											"type": "`$STRING`",
										},
										map[string]any{
											"example": "Europe/Berlin",
											"kind": "query",
											"name": "timezone",
											"orig": "timezone",
											"type": "`$STRING`",
										},
									},
								},
								"kind": "http",
								"method": "GET",
								"orig": "/v1/air-quality",
								"parts": []any{
									"v1",
									"air-quality",
								},
								"select": map[string]any{
									"exist": []any{
										"apikey",
										"cell_selection",
										"current",
										"domain",
										"end_date",
										"end_hour",
										"forecast_day",
										"forecast_hour",
										"hourly",
										"latitude",
										"longitude",
										"past_day",
										"past_hour",
										"start_date",
										"start_hour",
										"timeformat",
										"timezone",
									},
								},
								"transform": map[string]any{
									"req": "`reqdata`",
									"res": "`body`",
								},
							},
						},
					},
				},
				"relations": map[string]any{
					"ancestors": []any{},
				},
			},
		},
	}
}

var (
	sharedConfigOnce sync.Once
	sharedConfigVal  map[string]any
)

// SharedConfig returns the process-wide config, built once on first use.
// The SDK reads the config on every request and never writes to it, so one
// instance is shared by every client rather than rebuilt per client.
//
// The returned map is shared: treat it as read-only. Callers that need to
// mutate should use MakeConfig, which always returns a fresh copy.
func SharedConfig() map[string]any {
	sharedConfigOnce.Do(func() {
		sharedConfigVal = MakeConfig()
	})
	return sharedConfigVal
}

func makeFeature(name string) Feature {
	switch name {
	case "test":
		if NewTestFeatureFunc != nil {
			return NewTestFeatureFunc()
		}
	default:
		if NewBaseFeatureFunc != nil {
			return NewBaseFeatureFunc()
		}
	}
	return nil
}
