# frozen_string_literal: true

# Typed models for the AirQuality SDK.
#
# GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
# params (op.<name>.points[].args.params[]). Member types come from the
# canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
# @voxgig/apidef VALID_CANON). Ruby types are unenforced; these YARD
# annotations document the shapes. Do not edit by hand.

# AirQuality entity data model.
#
# @!attribute [rw] current
#   @return [Hash, nil]
#
# @!attribute [rw] current_units
#   @return [Hash, nil]
#
# @!attribute [rw] elevation
#   @return [Float, nil]
#
# @!attribute [rw] generationtime_ms
#   @return [Float, nil]
#
# @!attribute [rw] hourly
#   @return [Hash, nil]
#
# @!attribute [rw] hourly_units
#   @return [Hash, nil]
#
# @!attribute [rw] latitude
#   @return [Float, nil]
#
# @!attribute [rw] longitude
#   @return [Float, nil]
#
# @!attribute [rw] timezone
#   @return [String, nil]
#
# @!attribute [rw] timezone_abbreviation
#   @return [String, nil]
#
# @!attribute [rw] utc_offset_seconds
#   @return [Integer, nil]
AirQuality = Struct.new(
  :current,
  :current_units,
  :elevation,
  :generationtime_ms,
  :hourly,
  :hourly_units,
  :latitude,
  :longitude,
  :timezone,
  :timezone_abbreviation,
  :utc_offset_seconds,
  keyword_init: true
)

# Request payload for AirQuality#load.
#
# @!attribute [rw] current
#   @return [Hash, nil]
#
# @!attribute [rw] current_units
#   @return [Hash, nil]
#
# @!attribute [rw] elevation
#   @return [Float, nil]
#
# @!attribute [rw] generationtime_ms
#   @return [Float, nil]
#
# @!attribute [rw] hourly
#   @return [Hash, nil]
#
# @!attribute [rw] hourly_units
#   @return [Hash, nil]
#
# @!attribute [rw] latitude
#   @return [Float, nil]
#
# @!attribute [rw] longitude
#   @return [Float, nil]
#
# @!attribute [rw] timezone
#   @return [String, nil]
#
# @!attribute [rw] timezone_abbreviation
#   @return [String, nil]
#
# @!attribute [rw] utc_offset_seconds
#   @return [Integer, nil]
AirQualityLoadMatch = Struct.new(
  :current,
  :current_units,
  :elevation,
  :generationtime_ms,
  :hourly,
  :hourly_units,
  :latitude,
  :longitude,
  :timezone,
  :timezone_abbreviation,
  :utc_offset_seconds,
  keyword_init: true
)

