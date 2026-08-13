// Typed models for the AirQuality SDK.
//
// GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
// params (op.<name>.points[].args.params[]). Field/param types come from the
// canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
// @voxgig/apidef VALID_CANON). Do not edit by hand.

export interface AirQuality {
  current?: Record<string, any>
  current_units?: Record<string, any>
  elevation?: number
  generationtime_ms?: number
  hourly?: Record<string, any>
  hourly_units?: Record<string, any>
  latitude?: number
  longitude?: number
  timezone?: string
  timezone_abbreviation?: string
  utc_offset_seconds?: number
}

export interface AirQualityLoadMatch {
  current?: Record<string, any>
  current_units?: Record<string, any>
  elevation?: number
  generationtime_ms?: number
  hourly?: Record<string, any>
  hourly_units?: Record<string, any>
  latitude?: number
  longitude?: number
  timezone?: string
  timezone_abbreviation?: string
  utc_offset_seconds?: number
}

