<?php
declare(strict_types=1);

// AirQuality SDK base feature

class AirQualityBaseFeature
{
    public string $version;
    public string $name;
    public bool $active;

    public function __construct()
    {
        $this->version = '0.0.1';
        $this->name = 'base';
        $this->active = true;
    }

    public function get_version(): string { return $this->version; }
    public function get_name(): string { return $this->name; }
    public function get_active(): bool { return $this->active; }

    public function init(AirQualityContext $ctx, array $options): void {}
    public function PostConstruct(AirQualityContext $ctx): void {}
    public function PostConstructEntity(AirQualityContext $ctx): void {}
    public function SetData(AirQualityContext $ctx): void {}
    public function GetData(AirQualityContext $ctx): void {}
    public function GetMatch(AirQualityContext $ctx): void {}
    public function SetMatch(AirQualityContext $ctx): void {}
    public function PrePoint(AirQualityContext $ctx): void {}
    public function PreSpec(AirQualityContext $ctx): void {}
    public function PreRequest(AirQualityContext $ctx): void {}
    public function PreResponse(AirQualityContext $ctx): void {}
    public function PreResult(AirQualityContext $ctx): void {}
    public function PreDone(AirQualityContext $ctx): void {}
    public function PreUnexpected(AirQualityContext $ctx): void {}
}
