<?php
declare(strict_types=1);

// AirQuality SDK utility: result_headers

class AirQualityResultHeaders
{
    public static function call(AirQualityContext $ctx): ?AirQualityResult
    {
        $response = $ctx->response;
        $result = $ctx->result;
        if ($result) {
            if ($response && is_array($response->headers)) {
                $result->headers = $response->headers;
            } else {
                $result->headers = [];
            }
        }
        return $result;
    }
}
