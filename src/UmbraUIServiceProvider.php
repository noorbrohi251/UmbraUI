<?php

namespace Ihxnnxs\UmbraUI;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class UmbraUIServiceProvider extends ServiceProvider
{
    protected $components = [
        'button',
        'input',
        'textarea',
        'select',
        'checkbox',
        'radio',
    ];

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'umbra-ui');

        // Register anonymous components with prefix
        Blade::anonymousComponentPath(__DIR__ . '/../resources/views/components', 'umbra-ui');

        // Register anonymous components without prefix
        if (config('umbra-ui.register_global', true)) {
            Blade::anonymousComponentPath(__DIR__ . '/../resources/views/components');
        }

        foreach ($this->components as $component) {
            $this->publishes([
                __DIR__ . "/../resources/views/components/{$component}" => resource_path("views/components/{$component}"),
            ], $component);
        }

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/umbra-ui'),
        ], 'umbra-ui-views');

        $this->publishes([
            __DIR__ . '/../config/umbra-ui.php' => config_path('umbra-ui.php'),
        ], 'umbra-ui-config');
    }
}
