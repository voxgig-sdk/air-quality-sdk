<?php
declare(strict_types=1);

// AirQuality SDK utility: prepare_body

class AirQualityPrepareBody
{
    public static function call(AirQualityContext $ctx): mixed
    {
        if ($ctx->op->input === 'data') {
            return ($ctx->utility->transform_request)($ctx);
        }
        return null;
    }
}
