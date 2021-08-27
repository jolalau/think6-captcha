# think6-captcha

生成图片或字符验证码


## 安装
> composer require jolalau/think6-captcha

## 前后端分离中使用


###### 生成验证码
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

###### 验证验证码
```

if ( ! CaptchaApi::check($code,$key)) {
	//验证码错误
}

前端表单提交：code、key
```

## 来源
~~~
基于think-captcha进行扩展，可继续使用原版 captcha.php 验证码配置文件
~~~