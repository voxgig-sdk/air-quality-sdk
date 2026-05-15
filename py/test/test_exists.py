# ProjectName SDK exists test

import pytest
from airquality_sdk import AirQualitySDK


class TestExists:

    def test_should_create_test_sdk(self):
        testsdk = AirQualitySDK.test(None, None)
        assert testsdk is not None
