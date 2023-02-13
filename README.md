# kvstore

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)

A simple key-value storage class. used for configurations and extended in vakata/session.

## Install

Via Composer

``` bash
$ composer require vakata/kvstore
```

## Usage

``` php
$config = new \vakata\kvstore\Storage([ 'sample' => [ 'data' => 1] ]);
$config->get('sample.data', null, '.'); // 1
$config->set('sample.data', 2, '.'); // 2
$config->get('sample.data', null, '.'); // 2
$config->del('sample.data', '.'); // 2
$config->get('sample.data', null, '.'); // null
$config->get('sample.data', 'default', '.'); // "default"
$config->set('new.data.to.add', 2, '.'); // 2
$config->get('new.data', null, '.'); // [ 'to' => [ 'add' => 2 ] ]
```

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
[ico-downloads]: https://img.shields.io/packagist/dt/vakata/kvstore.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/vakata/kvstore
[link-downloads]: https://packagist.org/packages/vakata/kvstore
[link-author]: https://github.com/vakata
[link-contributors]: ../../contributors
[link-cc]: https://codeclimate.com/github/vakata/kvstore

