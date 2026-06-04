<?php
declare(strict_types=1);

// AirQuality SDK configuration

class AirQualityConfig
{
    public static function make_config(): array
    {
        return [
            "main" => [
                "name" => "AirQuality",
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
              'req' => false,
              'type' => '`$OBJECT`',
              'active' => true,
              'index$' => 0,
            ],
            [
              'name' => 'current_unit',
              'req' => false,
              'type' => '`$OBJECT`',
              'active' => true,
              'index$' => 1,
            ],
            [
              'name' => 'elevation',
              'req' => false,
              'type' => '`$NUMBER`',
              'active' => true,
              'index$' => 2,
            ],
            [
              'name' => 'generationtime_m',
              'req' => false,
              'type' => '`$NUMBER`',
              'active' => true,
              'index$' => 3,
            ],
            [
              'name' => 'hourly',
              'req' => false,
              'type' => '`$OBJECT`',
              'active' => true,
              'index$' => 4,
            ],
            [
              'name' => 'hourly_unit',
              'req' => false,
              'type' => '`$OBJECT`',
              'active' => true,
              'index$' => 5,
            ],
            [
              'name' => 'latitude',
              'req' => false,
              'type' => '`$NUMBER`',
              'active' => true,
              'index$' => 6,
            ],
            [
              'name' => 'longitude',
              'req' => false,
              'type' => '`$NUMBER`',
              'active' => true,
              'index$' => 7,
            ],
            [
              'name' => 'timezone',
              'req' => false,
              'type' => '`$STRING`',
              'active' => true,
              'index$' => 8,
            ],
            [
              'name' => 'timezone_abbreviation',
              'req' => false,
              'type' => '`$STRING`',
              'active' => true,
              'index$' => 9,
            ],
            [
              'name' => 'utc_offset_second',
              'req' => false,
              'type' => '`$INTEGER`',
              'active' => true,
              'index$' => 10,
            ],
          ],
          'name' => 'air_quality',
          'op' => [
            'load' => [
              'name' => 'load',
              'points' => [
                [
                  'args' => [
                    'query' => [
                      [
                        'kind' => 'query',
                        'name' => 'apikey',
                        'orig' => 'apikey',
                        'reqd' => false,
                        'type' => '`$STRING`',
                        'active' => true,
                      ],
                      [
                        'example' => 'nearest',
                        'kind' => 'query',
                        'name' => 'cell_selection',
                        'orig' => 'cell_selection',
                        'reqd' => false,
                        'type' => '`$STRING`',
                        'active' => true,
                      ],
                      [
                        'example' => 'european_aqi,pm10,pm2_5',
                        'kind' => 'query',
                        'name' => 'current',
                        'orig' => 'current',
                        'reqd' => false,
                        'type' => '`$ANY`',
                        'active' => true,
                      ],
                      [
                        'example' => 'auto',
                        'kind' => 'query',
                        'name' => 'domain',
                        'orig' => 'domain',
                        'reqd' => false,
                        'type' => '`$STRING`',
                        'active' => true,
                      ],
                      [
                        'example' => '2024-01-07',
                        'kind' => 'query',
                        'name' => 'end_date',
                        'orig' => 'end_date',
                        'reqd' => false,
                        'type' => '`$STRING`',
                        'active' => true,
                      ],
                      [
                        'example' => '2024-01-07T23:00',
                        'kind' => 'query',
                        'name' => 'end_hour',
                        'orig' => 'end_hour',
                        'reqd' => false,
                        'type' => '`$STRING`',
                        'active' => true,
                      ],
                      [
                        'example' => 5,
                        'kind' => 'query',
                        'name' => 'forecast_day',
                        'orig' => 'forecast_day',
                        'reqd' => false,
                        'type' => '`$INTEGER`',
                        'active' => true,
                      ],
                      [
                        'kind' => 'query',
                        'name' => 'forecast_hour',
                        'orig' => 'forecast_hour',
                        'reqd' => false,
                        'type' => '`$INTEGER`',
                        'active' => true,
                      ],
                      [
                        'example' => 'pm10,pm2_5,european_aqi',
                        'kind' => 'query',
                        'name' => 'hourly',
                        'orig' => 'hourly',
                        'reqd' => false,
                        'type' => '`$ANY`',
                        'active' => true,
                      ],
                      [
                        'example' => 52.52,
                        'kind' => 'query',
                        'name' => 'latitude',
                        'orig' => 'latitude',
                        'reqd' => true,
                        'type' => '`$NUMBER`',
                        'active' => true,
                      ],
                      [
                        'example' => 13.419,
                        'kind' => 'query',
                        'name' => 'longitude',
                        'orig' => 'longitude',
                        'reqd' => true,
                        'type' => '`$NUMBER`',
                        'active' => true,
                      ],
                      [
                        'example' => 0,
                        'kind' => 'query',
                        'name' => 'past_day',
                        'orig' => 'past_day',
                        'reqd' => false,
                        'type' => '`$INTEGER`',
                        'active' => true,
                      ],
                      [
                        'kind' => 'query',
                        'name' => 'past_hour',
                        'orig' => 'past_hour',
                        'reqd' => false,
                        'type' => '`$INTEGER`',
                        'active' => true,
                      ],
                      [
                        'example' => '2024-01-01',
                        'kind' => 'query',
                        'name' => 'start_date',
                        'orig' => 'start_date',
                        'reqd' => false,
                        'type' => '`$STRING`',
                        'active' => true,
                      ],
                      [
                        'example' => '2024-01-01T00:00',
                        'kind' => 'query',
                        'name' => 'start_hour',
                        'orig' => 'start_hour',
                        'reqd' => false,
                        'type' => '`$STRING`',
                        'active' => true,
                      ],
                      [
                        'example' => 'iso8601',
                        'kind' => 'query',
                        'name' => 'timeformat',
                        'orig' => 'timeformat',
                        'reqd' => false,
                        'type' => '`$STRING`',
                        'active' => true,
                      ],
                      [
                        'example' => 'Europe/Berlin',
                        'kind' => 'query',
                        'name' => 'timezone',
                        'orig' => 'timezone',
                        'reqd' => false,
                        'type' => '`$STRING`',
                        'active' => true,
                      ],
                    ],
                  ],
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
                  'active' => true,
                  'index$' => 0,
                ],
              ],
              'input' => 'data',
              'key$' => 'load',
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
