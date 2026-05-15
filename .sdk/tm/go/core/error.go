package core

type AirQualityError struct {
	IsAirQualityError bool
	Sdk              string
	Code             string
	Msg              string
	Ctx              *Context
	Result           any
	Spec             any
}

func NewAirQualityError(code string, msg string, ctx *Context) *AirQualityError {
	return &AirQualityError{
		IsAirQualityError: true,
		Sdk:              "AirQuality",
		Code:             code,
		Msg:              msg,
		Ctx:              ctx,
	}
}

func (e *AirQualityError) Error() string {
	return e.Msg
}
