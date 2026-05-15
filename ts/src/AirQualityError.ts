
import { Context } from './Context'


class AirQualityError extends Error {

  isAirQualityError = true

  sdk = 'AirQuality'

  code: string
  ctx: Context

  constructor(code: string, msg: string, ctx: Context) {
    super(msg)
    this.code = code
    this.ctx = ctx
  }

}

export {
  AirQualityError
}

