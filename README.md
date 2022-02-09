# 🇮🇩 Indonesia Region

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sawirricardo/indonesia-region.svg?style=flat-square)](https://packagist.org/packages/sawirricardo/indonesia-region)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/sawirricardo/indonesia-region/run-tests?label=tests)](https://github.com/sawirricardo/indonesia-region/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/sawirricardo/indonesia-region/Check%20&%20fix%20styling?label=code%20style)](https://github.com/sawirricardo/indonesia-region/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/sawirricardo/indonesia-region.svg?style=flat-square)](https://packagist.org/packages/sawirricardo/indonesia-region)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

Investing on Indonesia Region is defintely a good move from you. You can support by donating to my wallet

-   Wallet 0x3F20d326E5DA8ab6D27d9b2DdD350baB1e589d87
-   PayPal https://www.paypal.com/paypalme/sawirricardo.

## Installation

You can install the package via composer:

```bash
composer require sawirricardo/indonesia-region
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="indonesia-region-migrations"
php artisan migrate
```

<!-- You can publish the config file with:
```bash
php artisan vendor:publish --tag="indonesia-region_without_prefix-config"
``` -->

<!-- Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="example-views"
``` -->

<!-- This is the contents of the published config file:

```php
return [
];
``` -->

## Usage

```php
$provinces = \Sawirricardo\IndonesiaRegion\Models\IndonesiaRegion::query()->provinces()->get();
$cities = \Sawirricardo\IndonesiaRegion\Models\IndonesiaRegion::query()->cities()->where('parent_id',1)->get();
$districts = \Sawirricardo\IndonesiaRegion\Models\IndonesiaRegion::query()->districts()->where('parent_id',1)->get();
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

-   [ricardosawir](https://github.com/sawirricardo)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
