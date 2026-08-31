<?php

use JeffersonGoncalves\FilamentBenefit\FilamentBenefitPlugin;
use JeffersonGoncalves\FilamentBenefit\Resources\Benefits\BenefitResource;

it('has a valid plugin id', function () {
    expect(FilamentBenefitPlugin::make()->getId())->toBe('filament-benefit');
});

it('resolves to the same instance registered in the panel', function () {
    expect(FilamentBenefitPlugin::get())->toBeInstanceOf(FilamentBenefitPlugin::class);
});

it('registers the resource in the panel', function () {
    $panel = filament()->getPanel('admin');

    expect($panel->getResources())->toContain(BenefitResource::class);
});

it('falls back to the default navigation group', function () {
    expect(FilamentBenefitPlugin::make()->getNavigationGroup())->toBe('Benefits');
});

it('allows overriding the navigation group fluently', function () {
    expect(FilamentBenefitPlugin::make()->navigationGroup('Support')->getNavigationGroup())->toBe('Support');
});
