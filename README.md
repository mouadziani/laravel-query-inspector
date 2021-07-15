# Laravel Query Inspector
The missing laravel helper that allows you to ispect your eloquent queries with their binding parameters

## Installation

You can install the package via composer:

```bash
composer require mouadziani/laravel-query-inspector
```

## Usage

```php
$query = Model::where('attribute', 'value')->toRawSql();
dd($query); // select * from models where attribute = 'value'
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

- [MouadZIANI](https://github.com/mouadziani)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
