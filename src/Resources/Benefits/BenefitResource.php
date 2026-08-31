<?php

namespace JeffersonGoncalves\FilamentBenefit\Resources\Benefits;

use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use JeffersonGoncalves\Benefit\Models\Benefit;
use JeffersonGoncalves\FilamentBenefit\FilamentBenefitPlugin;
use JeffersonGoncalves\FilamentBenefit\Resources\Benefits\Pages\CreateBenefit;
use JeffersonGoncalves\FilamentBenefit\Resources\Benefits\Pages\EditBenefit;
use JeffersonGoncalves\FilamentBenefit\Resources\Benefits\Pages\ListBenefits;
use JeffersonGoncalves\FilamentBenefit\Resources\Benefits\Schemas\BenefitForm;
use JeffersonGoncalves\FilamentBenefit\Resources\Benefits\Tables\BenefitsTable;
use JeffersonGoncalves\FilamentTranslatable\Resources\Concerns\Translatable;
use Throwable;

class BenefitResource extends Resource
{
    use Translatable;

    protected static ?string $navigationIcon = 'heroicon-o-gift';

    protected static ?string $recordTitleAttribute = 'name';

    public static function getModel(): string
    {
        return Benefit::class;
    }

    public static function getNavigationGroup(): ?string
    {
        try {
            return FilamentBenefitPlugin::get()->getNavigationGroup();
        } catch (Throwable) {
            return config('filament-benefit.navigation_group', __('filament-benefit::benefit.navigation_group'));
        }
    }

    public static function getModelLabel(): string
    {
        return __('filament-benefit::benefit.item.label');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament-benefit::benefit.item.plural_label');
    }

    public static function form(Form $form): Form
    {
        return BenefitForm::configure($form);
    }

    public static function table(Table $table): Table
    {
        return BenefitsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListBenefits::route('/'),
            'create' => CreateBenefit::route('/create'),
            'edit' => EditBenefit::route('/{record}/edit'),
        ];
    }
}
