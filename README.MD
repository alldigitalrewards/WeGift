# Http

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.MD)
[![Build Status][ico-build]][link-build]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

This is a Work In Progress.

This is an exercise in understanding the http-interop related standards and is an implementation of [PSR-7 HTTP message interfaces](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-7-http-message.md) and [HTTP-Factory Interfaces](https://github.com/php-fig/fig-standards/blob/master/proposed/http-factory/http-factory.md)

## Install

Via Composer

``` bash
$ composer require alldigitalrewards/wegift
```

## Usage

``` php
require __DIR__ . '/../vendor/autoload.php';

use AllDigitalRewards\WeGift\Client;

$client = new Client('user-id', 'api-key');

foreach ($client->listAllProducts() as $product) {
    var_dump($product);
}
```

See examples in the [examples](/examples) folder.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email jhoughtelin@alldigitalrewards.com instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](LICENSE.MD) for more information.

[ico-version]: https://img.shields.io/packagist/v/alldigitalrewards/WeGift.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/alldigitalrewards/WeGift.svg?style=flat-square
[ico-build]: https://scrutinizer-ci.com/g/alldigitalrewards/WeGift/badges/build.png?b=main
[ico-code-quality]: https://img.shields.io/scrutinizer/g/alldigitalrewards/WeGift.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/alldigitalrewards/wegift.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/alldigitalrewards/wegift
[link-scrutinizer]: https://scrutinizer-ci.com/g/alldigitalrewards/WeGift/code-structure
[link-build]: https://scrutinizer-ci.com/g/alldigitalrewards/WeGift/build-status/main
[link-code-quality]: https://scrutinizer-ci.com/g/alldigitalrewards/WeGift
[link-downloads]: https://packagist.org/packages/alldigitalrewards/wegift
