package core

var UtilityRegistrar func(u *Utility)

var NewBaseFeatureFunc func() Feature

var NewTestFeatureFunc func() Feature

var NewAirQualityEntityFunc func(client *AirQualitySDK, entopts map[string]any) AirQualityEntity

