# AntiCapcha-PHP

## About Package
Hey,
Feel free to suggest improvements!

<a href="https://github.com/AdminAnticaptcha/anticaptcha-php" target="_blank">Original Repository GitHub</a>

## Installation

Router is available via Composer:

```bash
"lucsaarend/anticaptcha-php": "^1.0"
```
or run
```bash
composer require lucsaarend/anticaptcha-php
```

## Documentation

### Suports Solution

- AntiGate (Use in cloudFlare site protect example)
- FunCapcha
- FunCapcha ProxyLess
- GeeTest
- GeeTest ProxyLess
- HCapcha
- Hcapcha ProxyLess
- ImageToText
- RecaptchaV2
- RecaptchaV2 ProxyLess
- RecaptchaV2 Enterprise
- RecaptchaV2 Enterprise ProxyLess
- RecaptchaV3
- RecaptchaV3 Enterprise
- SquareCaptcha

Oficial Documentation <a href="http://getcaptchasolution.com/ctskr7kjok" target="_blank">AntiCapcha</a>

### Set Api Key
```php
#Set Api Key
Suport ENV use ANTICAPTCHA_KEY=YORK_KEY

#Use method setKey
#Example
$apiCaptcha = new AntiGate();
$apiCaptcha->setKey('MyKey');
```

### Examples
#### RecaptchaV2

```php
$apiCaptcha = new RecaptchaV2();
$apiCaptcha->setVerboseMode(true);#Use to debug

//recaptcha key from target website
$apiCaptcha->setWebsiteURL("http://http.myjino.ru/recaptcha/test-get.php");
$apiCaptcha->setWebsiteKey("6Lc_aCMTAAAAABx7u2W0WPXnVbI_v6ZdbM6rYf16");

//browser header parameters
$apiCaptcha->setUserAgent("Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:107.0) Gecko/20100101 Firefox/107.0");

if (!$apiCaptcha->createTask()) {
    $apiCaptcha->debout("API v2 send failed - ".$api->getErrorMessage(), "red");
    return false;
}

$taskId = $apiCaptcha->getTaskId();

if (!$apiCaptcha->waitForResult()) {
    $apiCaptcha->debout("could not solve captcha", "red");
    $apiCaptcha->debout($apiCaptcha->getErrorMessage());
} else {
    $recaptchaToken =   $apiCaptcha->getTaskSolution();
    echo "\ntoken result: $recaptchaToken\n\n";
}
```


