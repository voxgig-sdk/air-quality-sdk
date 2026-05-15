-- AirQuality SDK error

local AirQualityError = {}
AirQualityError.__index = AirQualityError


function AirQualityError.new(code, msg, ctx)
  local self = setmetatable({}, AirQualityError)
  self.is_sdk_error = true
  self.sdk = "AirQuality"
  self.code = code or ""
  self.msg = msg or ""
  self.ctx = ctx
  self.result = nil
  self.spec = nil
  return self
end


function AirQualityError:error()
  return self.msg
end


function AirQualityError:__tostring()
  return self.msg
end


return AirQualityError
