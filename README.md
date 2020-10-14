# Add password history to your laravel applications

[![Latest Version on Packagist](https://img.shields.io/packagist/v/StarfolkSoftware/password-history.svg?style=flat-square)](https://packagist.org/packages/StarfolkSoftware/password-history)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/StarfolkSoftware/password-history/run-tests?label=tests)](https://github.com/StarfolkSoftware/password-history/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/StarfolkSoftware/password-history.svg?style=flat-square)](https://packagist.org/packages/StarfolkSoftware/password-history)


Add password history to your laravel applications

## Installation

You can install the package via composer:

```bash
composer require StarfolkSoftware/password-history
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="StarfolkSoftware\PasswordHistory\PasswordHistoryServiceProvider" --tag="migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="StarfolkSoftware\PasswordHistory\PasswordHistoryServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

``` php
$password-history = new StarfolkSoftware\PasswordHistory();
echo $password-history->echoPhrase('Hello, StarfolkSoftware!');
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Faruk Nasir](https://github.com/frknasir)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
