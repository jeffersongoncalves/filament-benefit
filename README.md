<div class="filament-hidden">

![Filament Benefit](https://raw.githubusercontent.com/jeffersongoncalves/filament-benefit/1.x/art/jeffersongoncalves-filament-benefit.png)

</div>

# Filament Benefit

[![Buy Me A Coffee](https://img.shields.io/badge/Buy%20Me%20A%20Coffee-support-FFDD00?style=flat-square&logo=buy-me-a-coffee&logoColor=black)](https://buymeacoffee.com/jeffersongoncalves)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-benefit.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-benefit)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-benefit/tests.yml?branch=1.x&label=tests&style=flat-square)](https://github.com/jeffersongoncalves/filament-benefit/actions?query=workflow%3Atests+branch%3A1.x)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-benefit/pint.yml?branch=1.x&label=code%20style&style=flat-square)](https://github.com/jeffersongoncalves/filament-benefit/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3A1.x)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-benefit.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-benefit)
[![License](https://img.shields.io/packagist/l/jeffersongoncalves/filament-benefit.svg?style=flat-square)](LICENSE)

Filament admin UI (CRUD) for [`jeffersongoncalves/laravel-benefit`](https://github.com/jeffersongoncalves/laravel-benefit) — manage translatable benefits, with `name`/`description` fields, inside a [Filament](https://filamentphp.com) panel.

## Compatibility

| Package Version | Filament Version |
|-----------------|-------------------|
| [1.x](https://github.com/jeffersongoncalves/filament-benefit/tree/1.x) | 3.x |
| [2.x](https://github.com/jeffersongoncalves/filament-benefit/tree/2.x) | 4.x |
| [3.x](https://github.com/jeffersongoncalves/filament-benefit/tree/3.x) | 5.x |

> **Note (1.x):** pinned to Laravel 12.x. Filament v3.3.55 declares Laravel 13 support in its `composer.json`, but breaks at runtime against it (`$getRecordActions` undefined in table views, `SubNavigationPosition::$value` undefined) — an upstream Filament v3 issue, not something fixable here.

## Installation

You can install the package via composer:

```bash
composer require jeffersongoncalves/filament-benefit:"^1.0"
```

Register the plugin in your panel provider:

```php
use JeffersonGoncalves\FilamentBenefit\FilamentBenefitPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            FilamentBenefitPlugin::make(),
        ]);
}
```

The Benefit resource renders translatable fields (`name`, `description`), so a [`jeffersongoncalves/filament-translatable`](https://github.com/jeffersongoncalves/filament-translatable) plugin instance must also be registered in the same panel.

## Configuration

Publish the config file:

```bash
php artisan vendor:publish --tag="filament-benefit-config"
```

```php
return [
    'navigation_group' => 'Benefits',

    'resources' => [
        'benefit' => \JeffersonGoncalves\FilamentBenefit\Resources\Benefits\BenefitResource::class,
    ],
];
```

Or configure fluently:

```php
FilamentBenefitPlugin::make()->navigationGroup('Perks');
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

- [Jefferson Gonçalves](https://github.com/jeffersongoncalves)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
