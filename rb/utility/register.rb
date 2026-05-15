# AirQuality SDK utility registration
require_relative '../core/utility_type'
require_relative 'clean'
require_relative 'done'
require_relative 'make_error'
require_relative 'feature_add'
require_relative 'feature_hook'
require_relative 'feature_init'
require_relative 'fetcher'
require_relative 'make_fetch_def'
require_relative 'make_context'
require_relative 'make_options'
require_relative 'make_request'
require_relative 'make_response'
require_relative 'make_result'
require_relative 'make_point'
require_relative 'make_spec'
require_relative 'make_url'
require_relative 'param'
require_relative 'prepare_auth'
require_relative 'prepare_body'
require_relative 'prepare_headers'
require_relative 'prepare_method'
require_relative 'prepare_params'
require_relative 'prepare_path'
require_relative 'prepare_query'
require_relative 'result_basic'
require_relative 'result_body'
require_relative 'result_headers'
require_relative 'transform_request'
require_relative 'transform_response'

AirQualityUtility.registrar = ->(u) {
  u.clean = AirQualityUtilities::Clean
  u.done = AirQualityUtilities::Done
  u.make_error = AirQualityUtilities::MakeError
  u.feature_add = AirQualityUtilities::FeatureAdd
  u.feature_hook = AirQualityUtilities::FeatureHook
  u.feature_init = AirQualityUtilities::FeatureInit
  u.fetcher = AirQualityUtilities::Fetcher
  u.make_fetch_def = AirQualityUtilities::MakeFetchDef
  u.make_context = AirQualityUtilities::MakeContext
  u.make_options = AirQualityUtilities::MakeOptions
  u.make_request = AirQualityUtilities::MakeRequest
  u.make_response = AirQualityUtilities::MakeResponse
  u.make_result = AirQualityUtilities::MakeResult
  u.make_point = AirQualityUtilities::MakePoint
  u.make_spec = AirQualityUtilities::MakeSpec
  u.make_url = AirQualityUtilities::MakeUrl
  u.param = AirQualityUtilities::Param
  u.prepare_auth = AirQualityUtilities::PrepareAuth
  u.prepare_body = AirQualityUtilities::PrepareBody
  u.prepare_headers = AirQualityUtilities::PrepareHeaders
  u.prepare_method = AirQualityUtilities::PrepareMethod
  u.prepare_params = AirQualityUtilities::PrepareParams
  u.prepare_path = AirQualityUtilities::PreparePath
  u.prepare_query = AirQualityUtilities::PrepareQuery
  u.result_basic = AirQualityUtilities::ResultBasic
  u.result_body = AirQualityUtilities::ResultBody
  u.result_headers = AirQualityUtilities::ResultHeaders
  u.transform_request = AirQualityUtilities::TransformRequest
  u.transform_response = AirQualityUtilities::TransformResponse
}
