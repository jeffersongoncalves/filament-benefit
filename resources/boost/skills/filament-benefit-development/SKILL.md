---
name: filament-benefit-development
description: Build and work with Filament Benefit features, including the Benefit resource and panel configuration.
---

# Filament Benefit Development

## When to use this skill

Use this skill when:
- Integrating Filament Benefit into a panel
- Customizing the Benefit resource
- Overriding the resource class via config

## Configuration

### Basic Setup

```php
use JeffersonGoncalves\FilamentBenefit\FilamentBenefitPlugin;

FilamentBenefitPlugin::make()
    ->navigationGroup('Perks');
```

### Overriding the Resource

```php
// config/filament-benefit.php
return [
    'resources' => [
        'benefit' => \App\Filament\Resources\Benefits\CustomBenefitResource::class,
    ],
];
```

## Resources

### BenefitResource

Model: `JeffersonGoncalves\Benefit\Models\Benefit`. Fields: `name` (translatable), `description` (translatable), `slug`.

## Troubleshooting

### Plugin not registered

**Cause**: Plugin not added to PanelProvider.

**Solution**: Add `FilamentBenefitPlugin::make()` to the `plugins()` array in your PanelProvider.

### Locale switcher missing on Create/Edit/List pages

**Cause**: `FilamentTranslatablePlugin` not registered in the same panel.

**Solution**: Add `FilamentTranslatablePlugin::make()` alongside `FilamentBenefitPlugin::make()` in the panel's `plugins()` array.
