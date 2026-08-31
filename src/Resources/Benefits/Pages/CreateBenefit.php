<?php

namespace JeffersonGoncalves\FilamentBenefit\Resources\Benefits\Pages;

use Filament\Resources\Pages\CreateRecord;
use JeffersonGoncalves\FilamentBenefit\Resources\Benefits\BenefitResource;
use JeffersonGoncalves\FilamentTranslatable\Actions\LocaleSwitcher;
use JeffersonGoncalves\FilamentTranslatable\Resources\Pages\CreateRecord\Concerns\Translatable;

class CreateBenefit extends CreateRecord
{
    use Translatable;

    protected static string $resource = BenefitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            LocaleSwitcher::make(),
        ];
    }
}
