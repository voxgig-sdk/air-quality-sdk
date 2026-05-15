<?php
declare(strict_types=1);

// AirQuality SDK utility: feature_add

class AirQualityFeatureAdd
{
    public static function call(AirQualityContext $ctx, mixed $f): void
    {
        $ctx->client->features[] = $f;
    }
}
