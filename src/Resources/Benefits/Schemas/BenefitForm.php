<?php

namespace JeffersonGoncalves\FilamentBenefit\Resources\Benefits\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class BenefitForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(null)
            ->components([
                Section::make(__('filament-benefit::benefit.item.label'))
                    ->schema([
                        TextInput::make('name')
                            ->label(__('filament-benefit::benefit.item.fields.name'))
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn ($state, callable $set) => $set('slug', str($state)->slug()))
                            ->columnSpanFull(),
                        Textarea::make('description')
                            ->label(__('filament-benefit::benefit.item.fields.description'))
                            ->required()
                            ->rows(4)
                            ->columnSpanFull(),
                        TextInput::make('slug')
                            ->label(__('filament-benefit::benefit.item.fields.slug'))
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true)
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
