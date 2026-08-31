<?php

namespace JeffersonGoncalves\FilamentBenefit;

use Filament\Contracts\Plugin;
use Filament\Panel;
use JeffersonGoncalves\FilamentBenefit\Concerns\HasBenefitPluginConfig;
use JeffersonGoncalves\FilamentBenefit\Resources\Benefits\BenefitResource;

class FilamentBenefitPlugin implements Plugin
{
    use HasBenefitPluginConfig;

    public function getId(): string
    {
        return 'filament-benefit';
    }

    public function register(Panel $panel): void
    {
        $panel->resources($this->resolveResources([
            'benefit' => BenefitResource::class,
        ]));
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
