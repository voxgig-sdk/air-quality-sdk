# AirQuality SDK

Hourly pollutant and pollen forecasts at 11 km resolution, worldwide

> TypeScript, Python, PHP, Golang, Ruby, Lua SDKs, a CLI, an interactive REPL, and an MCP server for AI agents — all generated from one OpenAPI spec by [@voxgig/sdkgen](https://github.com/voxgig/sdkgen).

## About Air Quality API

The [Air Quality API](https://open-meteo.com/en/docs/air-quality-api) is run by [Open-Meteo](https://open-meteo.com), an open-source weather and environmental data project. It serves hourly air-quality forecasts derived from the 11 km CAMS European air quality model and the 45 km CAMS global atmospheric composition forecast.

What you get from the API:

- Pollutant concentrations: PM10, PM2.5, CO, CO₂, NO₂, SO₂, O₃, dust, aerosol optical depth, ammonia, methane (μg/m³, ppm for CO₂).
- Pollen counts (Europe only): alder, birch, grass, mugwort, olive, ragweed (grains/m³).
- European AQI (0–100+) and US AQI (0–500) indices.
- Forecasts up to 7 days ahead and up to 92 days of past data, by latitude/longitude.
- Responses in JSON, CSV, or XLSX with selectable IANA timezone.

The single endpoint is `GET /v1/air-quality`. No API key is needed for non-commercial use; commercial customers use a key plus a customer-prefixed server URL. CAMS European data is updated every 24 hours, CAMS global every 12 hours.

## Try it

**TypeScript**
```bash
npm install air-quality
```

**Python**
```bash
pip install air-quality-sdk
```

**PHP**
```bash
composer require voxgig/air-quality-sdk
```

**Golang**
```bash
go get github.com/voxgig-sdk/air-quality-sdk/go
```

**Ruby**
```bash
gem install air-quality-sdk
```

**Lua**
```bash
luarocks install air-quality-sdk
```

## 30-second quickstart

### TypeScript

```ts
import { AirQualitySDK } from 'air-quality'

const client = new AirQualitySDK({})

```

See the [TypeScript README](ts/README.md) for the
full guide, or scroll down for the same example in other languages.

## What's in the box

| Surface | Use it for | Path |
| --- | --- | --- |
| **SDK** (TypeScript, Python, PHP, Golang, Ruby, Lua) | App integration | `ts/` `py/` `php/` `go/` `rb/` `lua/` |
| **CLI** | Scripts, CI, ops, one-off API calls | `go-cli/` |
| **MCP server** | AI agents (Claude, Cursor, Cline) | `go-mcp/` |

## Use it from an AI agent (MCP)

The generated MCP server exposes every operation in this SDK as an
[MCP](https://modelcontextprotocol.io) tool that Claude, Cursor or Cline
can call directly. Build and register it:

```bash
cd go-mcp && go build -o air-quality-mcp .
```

Then add it to your agent's MCP config (Claude Desktop, Cursor, etc.):

```json
{
  "mcpServers": {
    "air-quality": {
      "command": "/abs/path/to/air-quality-mcp"
    }
  }
}
```

## Entities

The API exposes one entity:

| Entity | Description | API path |
| --- | --- | --- |
| **AirQuality** | Hourly and current pollutant, pollen, and AQI forecasts for a given location, served from `GET /v1/air-quality`. | `/v1/air-quality` |

Each entity supports the following operations where available: **load**,
**list**, **create**, **update**, and **remove**.

## Quickstart in other languages

### Python

```python
from airquality_sdk import AirQualitySDK

client = AirQualitySDK({})


# Load a specific airquality
airquality, err = client.AirQuality(None).load(
    {"id": "example_id"}, None
)
```

### PHP

```php
<?php
require_once 'airquality_sdk.php';

$client = new AirQualitySDK([]);


// Load a specific airquality
[$airquality, $err] = $client->AirQuality(null)->load(
    ["id" => "example_id"], null
);
```

### Golang

```go
import sdk "github.com/voxgig-sdk/air-quality-sdk/go"

client := sdk.NewAirQualitySDK(map[string]any{})

```

### Ruby

```ruby
require_relative "AirQuality_sdk"

client = AirQualitySDK.new({})


# Load a specific airquality
airquality, err = client.AirQuality(nil).load(
  { "id" => "example_id" }, nil
)
```

### Lua

```lua
local sdk = require("air-quality_sdk")

local client = sdk.new({})


-- Load a specific airquality
local airquality, err = client:AirQuality(nil):load(
  { id = "example_id" }, nil
)
```

## Unit testing in offline mode

Every SDK ships a test mode that swaps the HTTP transport for an
in-memory mock, so unit tests run offline.

### TypeScript

```ts
const client = AirQualitySDK.test()
const result = await client.AirQuality().load({ id: 'test01' })
// result.ok === true, result.data contains mock data
```

### Python

```python
client = AirQualitySDK.test(None, None)
result, err = client.AirQuality(None).load(
    {"id": "test01"}, None
)
```

### PHP

```php
$client = AirQualitySDK::test(null, null);
[$result, $err] = $client->AirQuality(null)->load(
    ["id" => "test01"], null
);
```

### Golang

```go
client := sdk.TestSDK(nil, nil)
result, err := client.AirQuality(nil).Load(
    map[string]any{"id": "test01"}, nil,
)
```

### Ruby

```ruby
client = AirQualitySDK.test(nil, nil)
result, err = client.AirQuality(nil).load(
  { "id" => "test01" }, nil
)
```

### Lua

```lua
local client = sdk.test(nil, nil)
local result, err = client:AirQuality(nil):load(
  { id = "test01" }, nil
)
```

## How it works

Every SDK call runs the same five-stage pipeline:

1. **Point** — resolve the API endpoint from the operation definition.
2. **Spec** — build the HTTP specification (URL, method, headers, body).
3. **Request** — send the HTTP request.
4. **Response** — receive and parse the response.
5. **Result** — extract the result data for the caller.

A feature hook fires at each stage (e.g. `PrePoint`, `PreSpec`,
`PreRequest`), so features can inspect or modify the pipeline without
forking the SDK.

### Features

| Feature | Purpose |
| --- | --- |
| **TestFeature** | In-memory mock transport for testing without a live server |

Pass custom features via the `extend` option at construction time.

### Direct and Prepare

For endpoints the entity model doesn't cover, use the low-level methods:

- **`direct(fetchargs)`** — build and send an HTTP request in one step.
- **`prepare(fetchargs)`** — build the request without sending it.

Both accept a map with `path`, `method`, `params`, `query`,
`headers`, and `body`. See the [How-to guides](#how-to-guides) below.

## How-to guides

### Make a direct API call

When the entity interface does not cover an endpoint, use `direct`:

**TypeScript:**
```ts
const result = await client.direct({
  path: '/api/resource/{id}',
  method: 'GET',
  params: { id: 'example' },
})
console.log(result.data)
```

**Python:**
```python
result, err = client.direct({
    "path": "/api/resource/{id}",
    "method": "GET",
    "params": {"id": "example"},
})
```

**PHP:**
```php
[$result, $err] = $client->direct([
    "path" => "/api/resource/{id}",
    "method" => "GET",
    "params" => ["id" => "example"],
]);
```

**Go:**
```go
result, err := client.Direct(map[string]any{
    "path":   "/api/resource/{id}",
    "method": "GET",
    "params": map[string]any{"id": "example"},
})
```

**Ruby:**
```ruby
result, err = client.direct({
  "path" => "/api/resource/{id}",
  "method" => "GET",
  "params" => { "id" => "example" },
})
```

**Lua:**
```lua
local result, err = client:direct({
  path = "/api/resource/{id}",
  method = "GET",
  params = { id = "example" },
})
```

## Per-language documentation

- [TypeScript](ts/README.md)
- [Python](py/README.md)
- [PHP](php/README.md)
- [Golang](go/README.md)
- [Ruby](rb/README.md)
- [Lua](lua/README.md)

## Using the Air Quality API

- Upstream: [https://open-meteo.com/en/docs/air-quality-api](https://open-meteo.com/en/docs/air-quality-api)

- Licensed under [CC BY 4.0](https://creativecommons.org/licenses/by/4.0/).
- Attribution required: credit Open-Meteo and the underlying CAMS ENSEMBLE data provider.
- Free for non-commercial use; commercial use requires an Open-Meteo API key.
- Source data: Copernicus Atmosphere Monitoring Service (CAMS).

---

Generated from the Air Quality API OpenAPI spec by [@voxgig/sdkgen](https://github.com/voxgig/sdkgen).
