# Laravel Query Inspector
The missing laravel helper that allows you to ispect your eloquent queries with it's bind parameters

## Motivations
Let's say you want to get the generated sql query from an eloquent query, by default in Laravel you can use the ``toSql()`` method, but in some situations you may need to get the generated query with its values instead of just getting the prepared statement, in this case you can use this package as well as a helper that which will give you the generated sql query with its bind parameters as a plain sql query just by calling ``toRawSql()`` from any eloquent query.

## Installation

You can install the package via composer:

```bash
composer require mouadziani/laravel-query-inspector
```

## Usage

```php
// Uisng toSql()
$query = Model::where('attribute', 'value')->toSql();
dd($query); // select * from models where attribute = ?

// Uisng toRawSql()
$query = Model::where('attribute', 'value')->toRawSql();
dd($query); // select * from models where attribute = 'value'
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
