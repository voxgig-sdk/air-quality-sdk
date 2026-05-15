<?php
declare(strict_types=1);

// AirQuality SDK exists test

require_once __DIR__ . '/../airquality_sdk.php';

use PHPUnit\Framework\TestCase;

class ExistsTest extends TestCase
{
    public function test_create_test_sdk(): void
    {
        $testsdk = AirQualitySDK::test(null, null);
        $this->assertNotNull($testsdk);
    }
}
