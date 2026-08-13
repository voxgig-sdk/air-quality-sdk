# AirQuality SDK feature factory

from airquality_sdk.feature.base_feature import AirQualityBaseFeature
from airquality_sdk.feature.test_feature import AirQualityTestFeature


def _make_feature(name):
    features = {
        "base": lambda: AirQualityBaseFeature(),
        "test": lambda: AirQualityTestFeature(),
    }
    factory = features.get(name)
    if factory is not None:
        return factory()
    return features["base"]()
