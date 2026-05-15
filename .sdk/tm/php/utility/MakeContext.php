<?php
declare(strict_types=1);

// AirQuality SDK utility: make_context

require_once __DIR__ . '/../core/Context.php';

class AirQualityMakeContext
{
    public static function call(array $ctxmap, ?AirQualityContext $basectx): AirQualityContext
    {
        return new AirQualityContext($ctxmap, $basectx);
    }
}
