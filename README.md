# kvstore

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Code Climate][ico-cc]][link-cc]
[![Tests Coverage][ico-cc-coverage]][link-cc]

A simple key-value storage class. used for configurations and extended in vakata/session.

## Install

Via Composer

``` bash
$ composer require vakata/kvstore
```

## Usage

``` php
$config = new \vakata\kvstore\Storage([ 'sample' => [ 'data' => 1] ]);
$config->get('sample.data'); // 1
$config->set('sample.data', 2); // 2
$config->get('sample.data'); // 2
$config->del('sample.data'); // true
$config->get('sample.data'); // null
$config->get('sample.data', 'default'); // "default"
$config->set('new.data.to.add', 2); // 2
$config->get('new.data'); // [ 'to' => [ 'add' => 2 ] ]
```

Read more in the [API docs](docs/README.md)

## Testing

``` bash
$ composer test
```


## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email github@vakata.com instead of using the issue tracker.

## Credits

- [vakata][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information. 

[ico-version]: https://img.shields.io/packagist/v/vakata/kvstore.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/vakata/kvstore/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/vakata/kvstore.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/vakata/kvstore.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/vakata/kvstore.svg?style=flat-square
[ico-cc]: https://img.shields.io/codeclimate/github/vakata/kvstore.svg?style=flat-square
[ico-cc-coverage]: https://img.shields.io/codeclimate/coverage/github/vakata/kvstore.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/vakata/kvstore
[link-travis]: https://travis-ci.org/vakata/kvstore
[link-scrutinizer]: https://scrutinizer-ci.com/g/vakata/kvstore/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/vakata/kvstore
[link-downloads]: https://packagist.org/packages/vakata/kvstore
[link-author]: https://github.com/vakata
[link-contributors]: ../../contributors
[link-cc]: https://codeclimate.com/github/vakata/kvstore

