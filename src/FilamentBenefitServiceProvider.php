<?php

namespace JeffersonGoncalves\FilamentBenefit;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentBenefitServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-benefit';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasConfigFile()
            ->hasTranslations();
    }
}
