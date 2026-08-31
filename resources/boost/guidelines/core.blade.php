## Filament Benefit

Admin UI (CRUD) for [`jeffersongoncalves/laravel-benefit`](https://github.com/jeffersongoncalves/laravel-benefit) inside a Filament panel. Adds a single resource — Benefits — with translatable `name`/`description` fields (via `jeffersongoncalves/filament-translatable`).

### Installation

@verbatim
<code-snippet name="Install the plugin" lang="bash">
composer require jeffersongoncalves/filament-benefit
</code-snippet>
@endverbatim

### Configuration in the Panel

@verbatim
<code-snippet name="Register in PanelProvider" lang="php">
use JeffersonGoncalves\FilamentBenefit\FilamentBenefitPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            FilamentBenefitPlugin::make()
                ->navigationGroup('Benefits'),
        ]);
}
</code-snippet>
@endverbatim

### Resources

- **BenefitResource** — manages `JeffersonGoncalves\Benefit\Models\Benefit` (name, description, slug).

The resource honors `filament-benefit.resources.benefit` config overrides, so a custom resource class can be swapped in without republishing the plugin.

### Best Practices

- Requires a `FilamentTranslatablePlugin` registered in the same panel (translatable fields rely on it for locale switching).
- Customize the navigation group globally via `config('filament-benefit.navigation_group')` or per-plugin via `->navigationGroup()`.
- Override the resource via `config('filament-benefit.resources.benefit')` without touching the plugin's `register()` method.
