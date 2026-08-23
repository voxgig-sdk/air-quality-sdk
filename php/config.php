<?php
declare(strict_types=1);

// AirQuality SDK configuration

class AirQualityConfig
{
    /** @var array<string,mixed>|null */
    private static ?array $shared_config = null;

    /**
     * Return the process-wide config, built once on first use. The SDK reads
     * the config on every request and never writes to it, so one instance is
     * shared by every client rather than rebuilt per client.
     *
     * PHP arrays are copy-on-write, so callers that do mutate the result get
     * their own copy and cannot disturb the shared one.
     */
    public static function shared_config(): array
    {
        if (self::$shared_config === null) {
            self::$shared_config = self::make_config();
        }
        return self::$shared_config;
    }

    /**
     * Build a fresh, fully materialised config array. Every call rebuilds the
     * whole structure, so prefer shared_config unless you need a private copy.
     */
    public static function make_config(): array
    {
        return [
            "main" => [
                "name" => "AirQuality",
                "slug" => "air-quality",
                "version" => "0.0.1",
                "target" => "php",
            ],
            "feature" => [
                "test" => [
          'options' => [
            'active' => false,
          ],
        ],
            ],
            "options" => [
                "base" => "https://air-quality-api.open-meteo.com",
                "auth" => [
                    "prefix" => "",
                ],
                "headers" => [
          'content-type' => 'application/json',
        ],
                "entity" => [
                    "air_quality" => [],
                ],
            ],
            "entity" => [
        'air_quality' => [
          'fields' => [
            [
              'name' => 'current',
              'short' => 'Current conditions data',
              'type' => '`$OBJECT`',
            ],
            [
              'name' => 'current_units',
              'short' => 'Units for current conditions variables',
              'type' => '`$OBJECT`',
            ],
            [
              'name' => 'elevation',
              'short' => 'Elevation in meters of the selected grid cell',
              'type' => '`$NUMBER`',
            ],
            [
              'name' => 'generationtime_ms',
              'short' => 'Generation time of the forecast in milliseconds',
              'type' => '`$NUMBER`',
            ],
            [
              'name' => 'hourly',
              'short' => 'Hourly forecast data',
              'type' => '`$OBJECT`',
            ],
            [
              'name' => 'hourly_units',
              'short' => 'Units for each hourly variable',
              'type' => '`$OBJECT`',
            ],
            [
              'name' => 'latitude',
              'short' => 'WGS84 latitude of the center of the weather grid-cell used for the forecast',
              'type' => '`$NUMBER`',
            ],
            [
              'name' => 'longitude',
              'short' => 'WGS84 longitude of the center of the weather grid-cell used for the forecast',
              'type' => '`$NUMBER`',
            ],
            [
              'name' => 'timezone',
              'short' => 'Timezone identifier (e.g., Europe/Berlin)',
              'type' => '`$STRING`',
            ],
            [
              'name' => 'timezone_abbreviation',
              'short' => 'Timezone abbreviation (e.g., CEST)',
              'type' => '`$STRING`',
            ],
            [
              'name' => 'utc_offset_seconds',
              'short' => 'Applied timezone offset in seconds',
              'type' => '`$INTEGER`',
            ],
          ],
          'name' => 'air_quality',
          'op' => [
            'load' => [
              'input' => 'data',
              'name' => 'load',
              'points' => [
                [
                  'args' => [
                    'query' => [
                      [
                        'kind' => 'query',
                        'name' => 'apikey',
                        'orig' => 'apikey',
                        'type' => '`$STRING`',
                      ],
                      [
                        'example' => 'nearest',
                        'kind' => 'query',
                        'name' => 'cell_selection',
                        'orig' => 'cell_selection',
                        'type' => '`$STRING`',
                      ],
                      [
                        'example' => 'european_aqi,pm10,pm2_5',
                        'kind' => 'query',
                        'name' => 'current',
                        'orig' => 'current',
                        'type' => '`$ANY`',
                      ],
                      [
                        'example' => 'auto',
                        'kind' => 'query',
                        'name' => 'domain',
                        'orig' => 'domain',
                        'type' => '`$STRING`',
                      ],
                      [
                        'example' => '2024-01-07',
                        'kind' => 'query',
                        'name' => 'end_date',
                        'orig' => 'end_date',
                        'type' => '`$STRING`',
                      ],
                      [
                        'example' => '2024-01-07T23:00',
                        'kind' => 'query',
                        'name' => 'end_hour',
                        'orig' => 'end_hour',
                        'type' => '`$STRING`',
                      ],
                      [
                        'example' => 5,
                        'kind' => 'query',
                        'name' => 'forecast_day',
                        'orig' => 'forecast_day',
                        'type' => '`$INTEGER`',
                      ],
                      [
                        'kind' => 'query',
                        'name' => 'forecast_hour',
                        'orig' => 'forecast_hour',
                        'type' => '`$INTEGER`',
                      ],
                      [
                        'example' => 'pm10,pm2_5,european_aqi',
                        'kind' => 'query',
                        'name' => 'hourly',
                        'orig' => 'hourly',
                        'type' => '`$ANY`',
                      ],
                      [
                        'example' => 52.52,
                        'kind' => 'query',
                        'name' => 'latitude',
                        'orig' => 'latitude',
                        'reqd' => true,
                        'type' => '`$NUMBER`',
                      ],
                      [
                        'example' => 13.419,
                        'kind' => 'query',
                        'name' => 'longitude',
                        'orig' => 'longitude',
                        'reqd' => true,
                        'type' => '`$NUMBER`',
                      ],
                      [
                        'example' => 0,
                        'kind' => 'query',
                        'name' => 'past_day',
                        'orig' => 'past_day',
                        'type' => '`$INTEGER`',
                      ],
                      [
                        'kind' => 'query',
                        'name' => 'past_hour',
                        'orig' => 'past_hour',
                        'type' => '`$INTEGER`',
                      ],
                      [
                        'example' => '2024-01-01',
                        'kind' => 'query',
                        'name' => 'start_date',
                        'orig' => 'start_date',
                        'type' => '`$STRING`',
                      ],
                      [
                        'example' => '2024-01-01T00:00',
                        'kind' => 'query',
                        'name' => 'start_hour',
                        'orig' => 'start_hour',
                        'type' => '`$STRING`',
                      ],
                      [
                        'example' => 'iso8601',
                        'kind' => 'query',
                        'name' => 'timeformat',
                        'orig' => 'timeformat',
                        'type' => '`$STRING`',
                      ],
                      [
                        'example' => 'Europe/Berlin',
                        'kind' => 'query',
                        'name' => 'timezone',
                        'orig' => 'timezone',
                        'type' => '`$STRING`',
                      ],
                    ],
                  ],
                  'kind' => 'http',
                  'method' => 'GET',
                  'orig' => '/v1/air-quality',
                  'parts' => [
                    'v1',
                    'air-quality',
                  ],
                  'select' => [
                    'exist' => [
                      'apikey',
                      'cell_selection',
                      'current',
                      'domain',
                      'end_date',
                      'end_hour',
                      'forecast_day',
                      'forecast_hour',
                      'hourly',
                      'latitude',
                      'longitude',
                      'past_day',
                      'past_hour',
                      'start_date',
                      'start_hour',
                      'timeformat',
                      'timezone',
                    ],
                  ],
                  'transform' => [
                    'req' => '`reqdata`',
                    'res' => '`body`',
                  ],
                ],
              ],
            ],
          ],
          'relations' => [
            'ancestors' => [],
          ],
        ],
      ],
        ];
    }


    public static function make_feature(string $name)
    {
        require_once __DIR__ . '/features.php';
        return AirQualityFeatures::make_feature($name);
    }
}
