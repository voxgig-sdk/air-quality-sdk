<?php
declare(strict_types=1);

// AirQuality SDK utility registration

require_once __DIR__ . '/../core/UtilityType.php';
require_once __DIR__ . '/Clean.php';
require_once __DIR__ . '/Done.php';
require_once __DIR__ . '/MakeError.php';
require_once __DIR__ . '/FeatureAdd.php';
require_once __DIR__ . '/FeatureHook.php';
require_once __DIR__ . '/FeatureInit.php';
require_once __DIR__ . '/Fetcher.php';
require_once __DIR__ . '/MakeFetchDef.php';
require_once __DIR__ . '/MakeContext.php';
require_once __DIR__ . '/MakeOptions.php';
require_once __DIR__ . '/MakeRequest.php';
require_once __DIR__ . '/MakeResponse.php';
require_once __DIR__ . '/MakeResult.php';
require_once __DIR__ . '/MakePoint.php';
require_once __DIR__ . '/MakeSpec.php';
require_once __DIR__ . '/MakeUrl.php';
require_once __DIR__ . '/Param.php';
require_once __DIR__ . '/PrepareAuth.php';
require_once __DIR__ . '/PrepareBody.php';
require_once __DIR__ . '/PrepareHeaders.php';
require_once __DIR__ . '/PrepareMethod.php';
require_once __DIR__ . '/PrepareParams.php';
require_once __DIR__ . '/PreparePath.php';
require_once __DIR__ . '/PrepareQuery.php';
require_once __DIR__ . '/ResultBasic.php';
require_once __DIR__ . '/ResultBody.php';
require_once __DIR__ . '/ResultHeaders.php';
require_once __DIR__ . '/TransformRequest.php';
require_once __DIR__ . '/TransformResponse.php';

AirQualityUtility::setRegistrar(function (AirQualityUtility $u): void {
    $u->clean = [AirQualityClean::class, 'call'];
    $u->done = [AirQualityDone::class, 'call'];
    $u->make_error = [AirQualityMakeError::class, 'call'];
    $u->feature_add = [AirQualityFeatureAdd::class, 'call'];
    $u->feature_hook = [AirQualityFeatureHook::class, 'call'];
    $u->feature_init = [AirQualityFeatureInit::class, 'call'];
    $u->fetcher = [AirQualityFetcher::class, 'call'];
    $u->make_fetch_def = [AirQualityMakeFetchDef::class, 'call'];
    $u->make_context = [AirQualityMakeContext::class, 'call'];
    $u->make_options = [AirQualityMakeOptions::class, 'call'];
    $u->make_request = [AirQualityMakeRequest::class, 'call'];
    $u->make_response = [AirQualityMakeResponse::class, 'call'];
    $u->make_result = [AirQualityMakeResult::class, 'call'];
    $u->make_point = [AirQualityMakePoint::class, 'call'];
    $u->make_spec = [AirQualityMakeSpec::class, 'call'];
    $u->make_url = [AirQualityMakeUrl::class, 'call'];
    $u->param = [AirQualityParam::class, 'call'];
    $u->prepare_auth = [AirQualityPrepareAuth::class, 'call'];
    $u->prepare_body = [AirQualityPrepareBody::class, 'call'];
    $u->prepare_headers = [AirQualityPrepareHeaders::class, 'call'];
    $u->prepare_method = [AirQualityPrepareMethod::class, 'call'];
    $u->prepare_params = [AirQualityPrepareParams::class, 'call'];
    $u->prepare_path = [AirQualityPreparePath::class, 'call'];
    $u->prepare_query = [AirQualityPrepareQuery::class, 'call'];
    $u->result_basic = [AirQualityResultBasic::class, 'call'];
    $u->result_body = [AirQualityResultBody::class, 'call'];
    $u->result_headers = [AirQualityResultHeaders::class, 'call'];
    $u->transform_request = [AirQualityTransformRequest::class, 'call'];
    $u->transform_response = [AirQualityTransformResponse::class, 'call'];
});
