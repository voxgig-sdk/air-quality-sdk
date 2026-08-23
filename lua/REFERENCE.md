# AirQuality Lua SDK Reference

Complete API reference for the AirQuality Lua SDK.


## AirQualitySDK

### Constructor

```lua
local sdk = require("air-quality_sdk")
local client = sdk.new(options)
```

Create a new SDK client instance.

**Parameters:**

| Name | Type | Description |
| --- | --- | --- |
| `options` | `table` | SDK configuration options. |
| `options.apikey` | `string` | API key for authentication. |
| `options.base` | `string` | Base URL for API requests. |
| `options.prefix` | `string` | URL prefix appended after base. |
| `options.suffix` | `string` | URL suffix appended after path. |
| `options.headers` | `table` | Custom headers for all requests. |
| `options.feature` | `table` | Feature configuration. |
| `options.system` | `table` | System overrides (e.g. custom fetch). |


### Static Methods

#### `sdk.test(testopts?, sdkopts?)`

Create a test client with mock features active. Both arguments are optional.

```lua
local client = sdk.test()
```


### Instance Methods

#### `AirQuality(data)`

Create a new `AirQuality` entity instance. Pass `nil` for no initial data.

#### `options_map() -> table`

Return a deep copy of the current SDK options.

#### `get_utility() -> Utility`

Return a copy of the SDK utility object.

#### `direct(fetchargs) -> table, err`

Make a direct HTTP request to any API endpoint.

**Parameters:**

| Name | Type | Description |
| --- | --- | --- |
| `fetchargs.path` | `string` | URL path with optional `{param}` placeholders. |
| `fetchargs.method` | `string` | HTTP method (default: `"GET"`). |
| `fetchargs.params` | `table` | Path parameter values for `{param}` substitution. |
| `fetchargs.query` | `table` | Query string parameters. |
| `fetchargs.headers` | `table` | Request headers (merged with defaults). |
| `fetchargs.body` | `any` | Request body (tables are JSON-serialized). |
| `fetchargs.ctrl` | `table` | Control options (e.g. `{ explain = true }`). |

**Returns:** `table, err`

#### `prepare(fetchargs) -> table, err`

Prepare a fetch definition without sending the request. Accepts the
same parameters as `direct()`.

**Returns:** `table, err`


---

## AirQualityEntity

```lua
local air_quality = client:AirQuality(nil)
```

### Fields

| Field | Type | Required | Description |
| --- | --- | --- | --- |
| `current` | `table` | No | Current conditions data |
| `current_units` | `table` | No | Units for current conditions variables |
| `elevation` | `number` | No | Elevation in meters of the selected grid cell |
| `generationtime_ms` | `number` | No | Generation time of the forecast in milliseconds |
| `hourly` | `table` | No | Hourly forecast data |
| `hourly_units` | `table` | No | Units for each hourly variable |
| `latitude` | `number` | No | WGS84 latitude of the center of the weather grid-cell used for the forecast |
| `longitude` | `number` | No | WGS84 longitude of the center of the weather grid-cell used for the forecast |
| `timezone` | `string` | No | Timezone identifier (e.g., Europe/Berlin) |
| `timezone_abbreviation` | `string` | No | Timezone abbreviation (e.g., CEST) |
| `utc_offset_seconds` | `number` | No | Applied timezone offset in seconds |

### Operations

#### `load(reqmatch, ctrl) -> any, err`

Load a single entity matching the given criteria.

```lua
local result, err = client:AirQuality():load()
```

### Common Methods

#### `data_get() -> table`

Get the entity data. Returns a copy of the current data.

#### `data_set(data)`

Set the entity data.

#### `match_get() -> table`

Get the entity match criteria.

#### `match_set(match)`

Set the entity match criteria.

#### `make() -> Entity`

Create a new `AirQualityEntity` instance with the same client and
options.

#### `get_name() -> string`

Return the entity name.


---

## Features

| Feature | Version | Description |
| --- | --- | --- |
| `test` | 0.0.1 | In-memory mock transport for testing without a live server |


Features are activated via the `feature` option:

```lua
local client = sdk.new({
  feature = {
    test = { active = true },
  },
})
```

