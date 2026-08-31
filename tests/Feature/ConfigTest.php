<?php

it('loads the filament-benefit config file', function () {
    expect(config('filament-benefit'))->toBeArray();
});

it('has a default navigation group', function () {
    expect(config('filament-benefit.navigation_group'))->toBe('Benefits');
});

it('registers the resource in config', function () {
    expect(config('filament-benefit.resources'))->toBeArray()
        ->toHaveKey('benefit');
});
