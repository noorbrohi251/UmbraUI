<?php

namespace Ihxnnxs\UmbraUI;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class UmbraUIServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/umbra-ui.php',
            'umbra-ui'
        );
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'umbra-ui');

        // Always register components with prefix
        Blade::anonymousComponentPath(__DIR__.'/../resources/views/components', 'umbra-ui');

        // Only register enabled components globally without prefix
        $this->registerGlobalComponents();

        // Publish individual components
        $this->registerComponentPublishing();

        // Publish all views and config
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/umbra-ui'),
        ], 'umbra-ui-views');

        $this->publishes([
            __DIR__.'/../config/umbra-ui.php' => config_path('umbra-ui.php'),
        ], 'umbra-ui-config');
    }

    protected function registerGlobalComponents(): void
    {
        if (! config('umbra-ui.register_global', false)) {
            return;
        }

        $enabledComponents = config('umbra-ui.enabled_components', []);
        $componentsPath = __DIR__.'/../resources/views/components';

        if (empty($enabledComponents)) {
            // If no specific components are enabled, register all
            Blade::anonymousComponentPath($componentsPath);

            return;
        }

        // Register only enabled components globally
        foreach ($enabledComponents as $component) {
            $componentPath = $componentsPath.'/'.$component;
            if (File::isDirectory($componentPath)) {
                Blade::anonymousComponentNamespace($componentPath, null);
            }
        }
    }

    protected function registerComponentPublishing(): void
    {
        $componentsPath = __DIR__.'/../resources/views/components';
        $components = collect(File::directories($componentsPath))
            ->map(fn ($path) => basename($path))
            ->toArray();

        foreach ($components as $component) {
            $this->publishes([
                __DIR__."/../resources/views/components/{$component}" => resource_path("views/components/{$component}"),
            ], "umbra-ui-{$component}");
        }

        // Publish groups of components
        $this->publishes([
            __DIR__.'/../resources/views/components/button' => resource_path('views/components/button'),
            __DIR__.'/../resources/views/components/input' => resource_path('views/components/input'),
            __DIR__.'/../resources/views/components/textarea' => resource_path('views/components/textarea'),
            __DIR__.'/../resources/views/components/select' => resource_path('views/components/select'),
        ], 'umbra-ui-forms');

        $this->publishes([
            __DIR__.'/../resources/views/components/alert' => resource_path('views/components/alert'),
            __DIR__.'/../resources/views/components/card' => resource_path('views/components/card'),
            __DIR__.'/../resources/views/components/modal' => resource_path('views/components/modal'),
        ], 'umbra-ui-layout');

        $this->publishes([
            __DIR__.'/../resources/views/components/tabs' => resource_path('views/components/tabs'),
            __DIR__.'/../resources/views/components/accordion' => resource_path('views/components/accordion'),
        ], 'umbra-ui-navigation');
    }
}
