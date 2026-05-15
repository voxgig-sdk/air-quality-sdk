# AirQuality SDK utility: make_context
require_relative '../core/context'
module AirQualityUtilities
  MakeContext = ->(ctxmap, basectx) {
    AirQualityContext.new(ctxmap, basectx)
  }
end
