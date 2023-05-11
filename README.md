# CRM Module for Catalyst

[![Latest Version on Packagist](https://img.shields.io/packagist/v/omnia-digital/catalyst-crm-module.svg?style=flat-square)](https://packagist.org/packages/omnia-digital/catalyst-crm-module)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/omnia-digital/catalyst-crm-module/run-tests?label=tests)](https://github.com/omnia-digital/catalyst-crm-module/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/omnia-digital/catalyst-crm-module/Check%20&%20fix%20styling?label=code%20style)](https://github.com/omnia-digital/catalyst-crm-module/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/omnia-digital/catalyst-crm-module.svg?style=flat-square)](https://packagist.org/packages/omnia-digital/catalyst-crm-module)



We've also included this repo to make creating Filament Resources for your module easier.
https://github.com/realmrhex/filament-modular

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require omnia-digital/catalyst-crm-module
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="catalyst-crm-module-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="catalyst-crm-module-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="catalyst-crm-module-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$catalyst-crm-module = new OmniaDigital\Crm();
echo $catalyst-crm-module->echoPhrase('Hello, OmniaDigital!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Josh Torres](https://github.com/joshtorres)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
