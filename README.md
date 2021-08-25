# think6-captcha

功能概述：
	1、生成、效验图片验证码
	2、生成自定义验证码
	3、使用cache，非session

## 安装
> composer require jolalau/think6-captcha

## 前后端分离中使用

###### 配置缓存

打开/config/cache.php
新增一个名为captcha的缓存连接

###### 生成图片验证码
```

use jolalau\captcha\facade\CaptchaApi;

$data = CaptchaApi::create();

其中$data 返回为：
{
    "base64": "base64格式",
    "key": "验证码的KEY",
    "md5": "e10adc3949ba59abbe56e057f20f883e",
	"code": "9515"
}
	
base64: 图片base64地址
key: 前端提交验证
md5: 验证码端md5值
code: 验证码值
```

###### 验证图片验证码
```

if ( ! CaptchaApi::check($code,$key)) {
	//验证码错误
}

前端表单提交：code、key
```

###### 生成自定义验证码
```

use jolalau\captcha\facade\CaptchaApi;

$data = CaptchaApi::createCode($userID);//比如用户ID、账号等，自定义

其中$data 返回为：
{
    "key": "123456",
	"code": "9541"
}

key: 原样返回，用于前端提交验证
code: 验证码值，用于自定义验证，比如：邮件、短信等
```

###### 验证自定义验证码
```

if ( ! CaptchaApi::checkCode($code,$key)) {
	//验证码错误
}

前端表单提交：code、key

```

## 来源
~~~
基于think-captcha进行扩展，可继续使用原版 captcha.php 验证码配置文件
~~~