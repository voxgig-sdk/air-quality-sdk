-- Typed models for the AirQuality SDK (LuaLS annotations).
--
-- GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
-- params (op.<name>.points[].args.params[]). Field/param types come from the
-- canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
-- @voxgig/apidef VALID_CANON). Annotations only — no runtime effect. Do not
-- edit by hand.

---@class AirQuality
---@field current? table
---@field current_units? table
---@field elevation? number
---@field generationtime_ms? number
---@field hourly? table
---@field hourly_units? table
---@field latitude? number
---@field longitude? number
---@field timezone? string
---@field timezone_abbreviation? string
---@field utc_offset_seconds? number

---@class AirQualityLoadMatch
---@field apikey? string
---@field cell_selection? string
---@field current? any
---@field domain? string
---@field end_date? string
---@field end_hour? string
---@field forecast_day? number
---@field forecast_hour? number
---@field hourly? any
---@field latitude number
---@field longitude number
---@field past_day? number
---@field past_hour? number
---@field start_date? string
---@field start_hour? string
---@field timeformat? string
---@field timezone? string

local M = {}

return M
