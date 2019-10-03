# Laravel ReCAPTCHA - v2.*
Simple Google ReCaptcha package for Laravel 5

## Installation

You can install the package via composer:
```sh
composer require biscolab/laravel-recaptcha:^2.0
```
The service **provider** must be registered in `config/app.php`:
```php
'providers' => [
    ...
    Biscolab\ReCaptcha\ReCaptchaServiceProvider::class,
];
```
You can use the facade for shorter code. Add "ReCaptcha" to your aliases:
```php
'aliases' => [
    ...
    'ReCaptcha' => Biscolab\ReCaptcha\Facades\ReCaptcha::class,
];
```
Create `config/recaptcha.php` configuration file using:
```su
php artisan vendor:publish --provider="Biscolab\ReCaptcha\ReCaptchaServiceProvider"
```

## Configuration

### Add your API Keys
Open `config/recaptcha.php` configuration file and set `api_site_key`, `api_secret_key` and `version`:
```php
return [
    'api_site_key'      => 'YOUR_API_SITE_KEY',
    'api_secret_key'    => 'YOUR_API_SECRET_KEY',
    'version'           => 'v2' // supported: v2|invisible 
];
```
For more invermation about Site Key and Secret Key please visit [Google RaCaptcha developer documentation](https://developers.google.com/recaptcha/docs/start)
Get more info about ReCAPTCHA version at https://developers.google.com/recaptcha/docs/versions

### Customize error message
Before starting please add validation recaptcha message to `resources/lang/[LANG]/validation.php` file
```php
return [
    ...
    'recaptcha' => 'Hey!!! :attribute is wrong!',
];
```

## How to use

### Embed in Blade

Insert `htmlScriptTagJsApi($formId)` helper before closing `</head>` tag
You can also use `ReCaptcha::htmlScriptTagJsApi($formId)`.
`$formId` is required only if you are using **ReCAPTCHA INVISIBLE**
```blade
<!DOCTYPE html>
<html>
    <head>
        ...
        {!! htmlScriptTagJsApi(/* $formId - INVISIBLE version only */) !!}
        or
        {!! ReCaptcha::htmlScriptTagJsApi(/* $formId - INVISIBLE version only */) !!}
    </head>
```

#### If you are using ReCAPTCHA v2
After you have to insert `htmlFormSnippet()` helper inside the form where you want to use the field `g-recaptcha-response`
You can also use `ReCaptcha::htmlFormSnippet()` .
```blade
<form>
    ...
    {!! htmlFormSnippet() !!}
    <input type="submit">
</form>
```

#### If you are using ReCAPTCHA INVISIBLE
After you have to insert `htmlFormButton($buttonInnerHTML)` helper inside the form where you want to use ReCAPTCHA. This function creates submit button therefore **you don't have to insert <input type="submit"> or similar**.
You can also use `ReCaptcha::htmlFormButton($buttonInnerHTML)` .
`$buttonInnerHTML` is what you want to write on the submit button
```blade
<form>
    ...
    {!! htmlFormButton(/* $buttonInnerHTML - Optional */) !!}
</form>
```

## Verify submitted data

Add **recaptcha** to your rules
```php
$v = Validator::make(request()->all(), [
    ...
    'g-recaptcha-response' => 'recaptcha',
]);
```

Print form errors
```php
dd($v->errors());
```

## Changelog
[Changelog](CHANGELOG.md)
