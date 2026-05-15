
import { test, describe } from 'node:test'
import { equal } from 'node:assert'


import { AirQualitySDK } from '..'


describe('exists', async () => {

  test('test-mode', async () => {
    const testsdk = await AirQualitySDK.test()
    equal(null !== testsdk, true)
  })

})
