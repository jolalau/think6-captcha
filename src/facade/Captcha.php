<?php

namespace jolalau\captcha\facade;

use think\Facade;

/**
 * Class Captcha
 * @package jolalau\captcha\facade
 * @mixin \jolalau\captcha\Captcha
 */
class Captcha extends Facade
{
    protected static function getFacadeClass()
    {
        return \jolalau\captcha\Captcha::class;
    }
}
