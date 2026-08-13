# AirQuality SDK utility: make_context

from airquality_sdk.core.context import AirQualityContext


def make_context_util(ctxmap, basectx):
    return AirQualityContext(ctxmap, basectx)
