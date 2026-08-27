# Typed models for the AirQuality SDK.
#
# GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
# params (op.<name>.points[].args.params[]). Field/param types come from the
# canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
# @voxgig/apidef VALID_CANON). Do not edit by hand.
#
# These are TypedDicts, not dataclasses: the SDK ops return/accept plain dicts
# at runtime, and a TypedDict IS a dict shape, so the types match the runtime.
# Optional (req:false) keys are modelled as TypedDict key-optionality
# (total=False), split into a required base + total=False subclass when a type
# has both required and optional keys.

from __future__ import annotations

from typing import TypedDict, Any


class AirQuality(TypedDict, total=False):
    current: dict
    current_units: dict
    elevation: float
    generationtime_ms: float
    hourly: dict
    hourly_units: dict
    latitude: float
    longitude: float
    timezone: str
    timezone_abbreviation: str
    utc_offset_seconds: int


class AirQualityLoadMatchRequired(TypedDict):
    latitude: float
    longitude: float


class AirQualityLoadMatch(AirQualityLoadMatchRequired, total=False):
    apikey: str
    cell_selection: str
    current: Any
    domain: str
    end_date: str
    end_hour: str
    forecast_day: int
    forecast_hour: int
    hourly: Any
    past_day: int
    past_hour: int
    start_date: str
    start_hour: str
    timeformat: str
    timezone: str
