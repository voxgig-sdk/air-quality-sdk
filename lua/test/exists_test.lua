-- AirQuality SDK exists test

local sdk = require("air-quality_sdk")

describe("AirQualitySDK", function()
  it("should create test SDK", function()
    local testsdk = sdk.test(nil, nil)
    assert.is_not_nil(testsdk)
  end)
end)
