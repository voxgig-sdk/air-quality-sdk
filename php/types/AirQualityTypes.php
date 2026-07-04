<?php
declare(strict_types=1);

// Typed models for the AirQuality SDK.
//
// GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
// params (op.<name>.points[].args.params[]). Field/param types come from the
// canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
// @voxgig/apidef VALID_CANON). Do not edit by hand.
//
// These are documentation-grade value objects (PHP 8 typed properties),
// registered on the composer classmap autoload. The SDK boundary exchanges
// assoc-arrays; these classes name the shapes for tooling and typed callers.

/** AirQuality entity data model. */
class AirQuality
{
    public ?array $current = null;
    public ?array $current_unit = null;
    public ?float $elevation = null;
    public ?float $generationtime_m = null;
    public ?array $hourly = null;
    public ?array $hourly_unit = null;
    public ?float $latitude = null;
    public ?float $longitude = null;
    public ?string $timezone = null;
    public ?string $timezone_abbreviation = null;
    public ?int $utc_offset_second = null;
}

/** Match filter for AirQuality#load (any subset of AirQuality fields). */
class AirQualityLoadMatch
{
    public ?array $current = null;
    public ?array $current_unit = null;
    public ?float $elevation = null;
    public ?float $generationtime_m = null;
    public ?array $hourly = null;
    public ?array $hourly_unit = null;
    public ?float $latitude = null;
    public ?float $longitude = null;
    public ?string $timezone = null;
    public ?string $timezone_abbreviation = null;
    public ?int $utc_offset_second = null;
}

