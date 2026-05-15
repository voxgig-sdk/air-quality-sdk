<?php
declare(strict_types=1);

// AirQuality SDK feature factory

require_once __DIR__ . '/feature/BaseFeature.php';
require_once __DIR__ . '/feature/TestFeature.php';


class AirQualityFeatures
{
    public static function make_feature(string $name)
    {
        switch ($name) {
            case "base":
                return new AirQualityBaseFeature();
            case "test":
                return new AirQualityTestFeature();
            default:
                return new AirQualityBaseFeature();
        }
    }
}
