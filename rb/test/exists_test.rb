# AirQuality SDK exists test

require "minitest/autorun"
require_relative "../AirQuality_sdk"

class ExistsTest < Minitest::Test
  def test_create_test_sdk
    testsdk = AirQualitySDK.test(nil, nil)
    assert !testsdk.nil?
  end
end
