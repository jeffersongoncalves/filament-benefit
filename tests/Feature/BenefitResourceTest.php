<?php

use JeffersonGoncalves\Benefit\Models\Benefit;
use JeffersonGoncalves\FilamentBenefit\Resources\Benefits\Pages\CreateBenefit;
use JeffersonGoncalves\FilamentBenefit\Resources\Benefits\Pages\EditBenefit;
use JeffersonGoncalves\FilamentBenefit\Resources\Benefits\Pages\ListBenefits;
use Livewire\Livewire;

beforeEach(function () {
    filament()->setCurrentPanel(filament()->getPanel('admin'));
});

it('can render the benefit list page', function () {
    Livewire::test(ListBenefits::class)->assertSuccessful();
});

it('can list benefits in the table', function () {
    $benefit = Benefit::create([
        'name' => 'Free shipping',
        'description' => 'No shipping costs on any order.',
        'slug' => 'free-shipping',
    ]);

    Livewire::test(ListBenefits::class)
        ->assertCanSeeTableRecords([$benefit]);
});

it('can create a benefit', function () {
    Livewire::test(CreateBenefit::class)
        ->fillForm([
            'name' => 'Priority support',
            'description' => '24/7 priority customer support.',
            'slug' => 'priority-support',
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    expect(Benefit::query()->where('slug', 'priority-support')->exists())->toBeTrue();
});

it('can edit a benefit', function () {
    $benefit = Benefit::create([
        'name' => 'Cashback',
        'description' => '5% cashback on every purchase.',
        'slug' => 'cashback',
    ]);

    Livewire::test(EditBenefit::class, ['record' => $benefit->getRouteKey()])
        ->assertSuccessful()
        ->fillForm(['description' => '10% cashback on every purchase.'])
        ->call('save')
        ->assertHasNoFormErrors();

    expect($benefit->refresh()->description)->toBe('10% cashback on every purchase.');
});
