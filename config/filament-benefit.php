<?php

use JeffersonGoncalves\FilamentBenefit\Resources\Benefits\BenefitResource;

return [

    /*
    |--------------------------------------------------------------------------
    | Navigation Group
    |--------------------------------------------------------------------------
    |
    | The navigation group under which the Benefit resource is listed in the
    | Filament panel. Override per-plugin with ->navigationGroup('...').
    |
    */

    'navigation_group' => 'Benefits',

    /*
    |--------------------------------------------------------------------------
    | Resources
    |--------------------------------------------------------------------------
    |
    | The Filament resource classes registered by the plugin. Each entry can be
    | swapped for a custom resource extending the default one.
    |
    */

    'resources' => [
        'benefit' => BenefitResource::class,
    ],

];
