package core

func MakeConfig() map[string]any {
	return map[string]any{
		"main": map[string]any{
			"name": "AirQuality",
		},
		"feature": map[string]any{
			"test": map[string]any{
				"options": map[string]any{
					"active": false,
				},
			},
		},
		"options": map[string]any{
			"base": "https://air-quality-api.open-meteo.com",
			"auth": map[string]any{
				"prefix": "",
			},
			"headers": map[string]any{
				"content-type": "application/json",
			},
			"entity": map[string]any{
				"air_quality": map[string]any{},
			},
		},
		"entity": map[string]any{
			"air_quality": map[string]any{
				"fields": []any{
					map[string]any{
						"active": true,
						"name": "current",
						"req": false,
						"type": "`$OBJECT`",
						"index$": 0,
					},
					map[string]any{
						"active": true,
						"name": "current_unit",
						"req": false,
						"type": "`$OBJECT`",
						"index$": 1,
					},
					map[string]any{
						"active": true,
						"name": "elevation",
						"req": false,
						"type": "`$NUMBER`",
						"index$": 2,
					},
					map[string]any{
						"active": true,
						"name": "generationtime_m",
						"req": false,
						"type": "`$NUMBER`",
						"index$": 3,
					},
					map[string]any{
						"active": true,
						"name": "hourly",
						"req": false,
						"type": "`$OBJECT`",
						"index$": 4,
					},
					map[string]any{
						"active": true,
						"name": "hourly_unit",
						"req": false,
						"type": "`$OBJECT`",
						"index$": 5,
					},
					map[string]any{
						"active": true,
						"name": "latitude",
						"req": false,
						"type": "`$NUMBER`",
						"index$": 6,
					},
					map[string]any{
						"active": true,
						"name": "longitude",
						"req": false,
						"type": "`$NUMBER`",
						"index$": 7,
					},
					map[string]any{
						"active": true,
						"name": "timezone",
						"req": false,
						"type": "`$STRING`",
						"index$": 8,
					},
					map[string]any{
						"active": true,
						"name": "timezone_abbreviation",
						"req": false,
						"type": "`$STRING`",
						"index$": 9,
					},
					map[string]any{
						"active": true,
						"name": "utc_offset_second",
						"req": false,
						"type": "`$INTEGER`",
						"index$": 10,
					},
				},
				"name": "air_quality",
				"op": map[string]any{
					"load": map[string]any{
						"input": "data",
						"name": "load",
						"points": []any{
							map[string]any{
								"active": true,
								"args": map[string]any{
									"query": []any{
										map[string]any{
											"active": true,
											"kind": "query",
											"name": "apikey",
											"orig": "apikey",
											"reqd": false,
											"type": "`$STRING`",
										},
										map[string]any{
											"active": true,
											"example": "nearest",
											"kind": "query",
											"name": "cell_selection",
											"orig": "cell_selection",
											"reqd": false,
											"type": "`$STRING`",
										},
										map[string]any{
											"active": true,
											"example": "european_aqi,pm10,pm2_5",
											"kind": "query",
											"name": "current",
											"orig": "current",
											"reqd": false,
											"type": "`$ANY`",
										},
										map[string]any{
											"active": true,
											"example": "auto",
											"kind": "query",
											"name": "domain",
											"orig": "domain",
											"reqd": false,
											"type": "`$STRING`",
										},
										map[string]any{
											"active": true,
											"example": "2024-01-07",
											"kind": "query",
											"name": "end_date",
											"orig": "end_date",
											"reqd": false,
											"type": "`$STRING`",
										},
										map[string]any{
											"active": true,
											"example": "2024-01-07T23:00",
											"kind": "query",
											"name": "end_hour",
											"orig": "end_hour",
											"reqd": false,
											"type": "`$STRING`",
										},
										map[string]any{
											"active": true,
											"example": 5,
											"kind": "query",
											"name": "forecast_day",
											"orig": "forecast_day",
											"reqd": false,
											"type": "`$INTEGER`",
										},
										map[string]any{
											"active": true,
											"kind": "query",
											"name": "forecast_hour",
											"orig": "forecast_hour",
											"reqd": false,
											"type": "`$INTEGER`",
										},
										map[string]any{
											"active": true,
											"example": "pm10,pm2_5,european_aqi",
											"kind": "query",
											"name": "hourly",
											"orig": "hourly",
											"reqd": false,
											"type": "`$ANY`",
										},
										map[string]any{
											"active": true,
											"example": 52.52,
											"kind": "query",
											"name": "latitude",
											"orig": "latitude",
											"reqd": true,
											"type": "`$NUMBER`",
										},
										map[string]any{
											"active": true,
											"example": 13.419,
											"kind": "query",
											"name": "longitude",
											"orig": "longitude",
											"reqd": true,
											"type": "`$NUMBER`",
										},
										map[string]any{
											"active": true,
											"example": 0,
											"kind": "query",
											"name": "past_day",
											"orig": "past_day",
											"reqd": false,
											"type": "`$INTEGER`",
										},
										map[string]any{
											"active": true,
											"kind": "query",
											"name": "past_hour",
											"orig": "past_hour",
											"reqd": false,
											"type": "`$INTEGER`",
										},
										map[string]any{
											"active": true,
											"example": "2024-01-01",
											"kind": "query",
											"name": "start_date",
											"orig": "start_date",
											"reqd": false,
											"type": "`$STRING`",
										},
										map[string]any{
											"active": true,
											"example": "2024-01-01T00:00",
											"kind": "query",
											"name": "start_hour",
											"orig": "start_hour",
											"reqd": false,
											"type": "`$STRING`",
										},
										map[string]any{
											"active": true,
											"example": "iso8601",
											"kind": "query",
											"name": "timeformat",
											"orig": "timeformat",
											"reqd": false,
											"type": "`$STRING`",
										},
										map[string]any{
											"active": true,
											"example": "Europe/Berlin",
											"kind": "query",
											"name": "timezone",
											"orig": "timezone",
											"reqd": false,
											"type": "`$STRING`",
										},
									},
								},
								"method": "GET",
								"orig": "/v1/air-quality",
								"parts": []any{
									"v1",
									"air-quality",
								},
								"select": map[string]any{
									"exist": []any{
										"apikey",
										"cell_selection",
										"current",
										"domain",
										"end_date",
										"end_hour",
										"forecast_day",
										"forecast_hour",
										"hourly",
										"latitude",
										"longitude",
										"past_day",
										"past_hour",
										"start_date",
										"start_hour",
										"timeformat",
										"timezone",
									},
								},
								"transform": map[string]any{
									"req": "`reqdata`",
									"res": "`body`",
								},
								"index$": 0,
							},
						},
						"key$": "load",
					},
				},
				"relations": map[string]any{
					"ancestors": []any{},
				},
			},
		},
	}
}

func makeFeature(name string) Feature {
	switch name {
	case "test":
		if NewTestFeatureFunc != nil {
			return NewTestFeatureFunc()
		}
	default:
		if NewBaseFeatureFunc != nil {
			return NewBaseFeatureFunc()
		}
	}
	return nil
}
