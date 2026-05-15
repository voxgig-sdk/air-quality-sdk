<?php
declare(strict_types=1);

// AirQuality SDK utility: result_body

class AirQualityResultBody
{
    public static function call(AirQualityContext $ctx): ?AirQualityResult
    {
        $response = $ctx->response;
        $result = $ctx->result;
        if ($result && $response && $response->json_func && $response->body) {
            $result->body = ($response->json_func)();
        }
        return $result;
    }
}
