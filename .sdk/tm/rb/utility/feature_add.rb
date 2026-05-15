# AirQuality SDK utility: feature_add
module AirQualityUtilities
  FeatureAdd = ->(ctx, f) {
    ctx.client.features << f
  }
end
