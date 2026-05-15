# AirQuality SDK feature factory

require_relative 'feature/base_feature'
require_relative 'feature/test_feature'


module AirQualityFeatures
  def self.make_feature(name)
    case name
    when "base"
      AirQualityBaseFeature.new
    when "test"
      AirQualityTestFeature.new
    else
      AirQualityBaseFeature.new
    end
  end
end
