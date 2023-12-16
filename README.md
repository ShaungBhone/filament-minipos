# About Filament package designed for restaurants, cafes, and bars with simple and low functionality point-of-sale systems.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/shaungbhone-filament-minipos/filament-minipos.svg?style=flat-square)](https://packagist.org/packages/shaungbhone-filament-minipos/filament-minipos)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/shaungbhone-filament-minipos/filament-minipos/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/shaungbhone-filament-minipos/filament-minipos/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/shaungbhone-filament-minipos/filament-minipos/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/shaungbhone-filament-minipos/filament-minipos/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/shaungbhone-filament-minipos/filament-minipos.svg?style=flat-square)](https://packagist.org/packages/shaungbhone-filament-minipos/filament-minipos)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require shaungbhone-filament-minipos/filament-minipos
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-minipos-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-minipos-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-minipos-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filamentMinipos = new ShaungBhone\FilamentMinipos();
echo $filamentMinipos->echoPhrase('Hello, ShaungBhone/FilamentMinipos!');
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

- [ShaungBhone](https://github.com/ShaungBhone)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
