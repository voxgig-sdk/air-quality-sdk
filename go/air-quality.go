package voxgigairqualitysdk

import (
	"github.com/voxgig-sdk/air-quality-sdk/go/core"
	"github.com/voxgig-sdk/air-quality-sdk/go/entity"
	"github.com/voxgig-sdk/air-quality-sdk/go/feature"
	_ "github.com/voxgig-sdk/air-quality-sdk/go/utility"
)

// Type aliases preserve external API.
type AirQualitySDK = core.AirQualitySDK
type Context = core.Context
type Utility = core.Utility
type Feature = core.Feature
type Entity = core.Entity
type AirQualityEntity = core.AirQualityEntity
type FetcherFunc = core.FetcherFunc
type Spec = core.Spec
type Result = core.Result
type Response = core.Response
type Operation = core.Operation
type Control = core.Control
type AirQualityError = core.AirQualityError

// BaseFeature from feature package.
type BaseFeature = feature.BaseFeature

func init() {
	core.NewBaseFeatureFunc = func() core.Feature {
		return feature.NewBaseFeature()
	}
	core.NewTestFeatureFunc = func() core.Feature {
		return feature.NewTestFeature()
	}
	core.NewAirQualityEntityFunc = func(client *core.AirQualitySDK, entopts map[string]any) core.AirQualityEntity {
		return entity.NewAirQualityEntity(client, entopts)
	}
}

// Constructor re-exports.
var NewAirQualitySDK = core.NewAirQualitySDK
var TestSDK = core.TestSDK
var NewContext = core.NewContext
var NewSpec = core.NewSpec
var NewResult = core.NewResult
var NewResponse = core.NewResponse
var NewOperation = core.NewOperation
var MakeConfig = core.MakeConfig
var NewBaseFeature = feature.NewBaseFeature
var NewTestFeature = feature.NewTestFeature
