-- Typed models for the AirQuality SDK (LuaLS annotations).
--
-- GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
-- params (op.<name>.points[].args.params[]). Field/param types come from the
-- canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
-- @voxgig/apidef VALID_CANON). Annotations only — no runtime effect. Do not
-- edit by hand.

---@class AirQuality
---@field current? table
---@field current_unit? table
---@field elevation? number
---@field generationtime_m? number
---@field hourly? table
---@field hourly_unit? table
---@field latitude? number
---@field longitude? number
---@field timezone? string
---@field timezone_abbreviation? string
---@field utc_offset_second? number

---@class AirQualityLoadMatch

local M = {}

return M
