<?php

namespace jolalau\captcha\facade;

use think\Facade;

/**
 * CaptchaApi
 * @package jolalau\captcha\facade
 * @mixin \jolalau\captcha\CaptchaApi
 */
class CaptchaApi extends Facade
{
    protected static function getFacadeClass()
    {
        return \jolalau\captcha\CaptchaApi::class;
    }
}
