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

        // Register individual components globally if enabled
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
        if (!config('umbra-ui.register_global', false)) {
            return;
        }

        $enabledComponents = config('umbra-ui.enabled_components', []);
        
        if (empty($enabledComponents)) {
            // If no specific components are enabled, don't register any globally
            // User must explicitly list components they want
            return;
        }

        // Register only enabled components individually
        foreach ($enabledComponents as $component) {
            $this->registerSingleComponent($component);
        }
    }

    protected function registerSingleComponent(string $component): void
    {
        $componentPath = __DIR__."/../resources/views/components/{$component}";
        
        if (!File::isDirectory($componentPath)) {
            return;
        }

        // Register the specific component globally
        if (File::exists("{$componentPath}/index.blade.php")) {
            Blade::component($component, "{$componentPath}/index.blade.php");
        }
        
        // Handle nested components (like tabs.nav, tabs.panel)
        $subComponents = File::glob("{$componentPath}/*.blade.php");
        foreach ($subComponents as $subComponentPath) {
            $subComponentName = pathinfo($subComponentPath, PATHINFO_FILENAME);
            if ($subComponentName !== 'index') {
                Blade::component("{$component}.{$subComponentName}", $subComponentPath);
            }
        }
    }

    protected function registerComponentPublishing(): void
    {
        $componentsPath = __DIR__.'/../resources/views/components';
        $components = collect(File::directories($componentsPath))
            ->map(fn($path) => basename($path))
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
            __DIR__.'/../resources/views/components/checkbox' => resource_path('views/components/checkbox'),
            __DIR__.'/../resources/views/components/radio' => resource_path('views/components/radio'),
            __DIR__.'/../resources/views/components/label' => resource_path('views/components/label'),
            __DIR__.'/../resources/views/components/field' => resource_path('views/components/field'),
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

        $this->publishes([
            __DIR__.'/../resources/views/components/switch' => resource_path('views/components/switch'),
            __DIR__.'/../resources/views/components/slider' => resource_path('views/components/slider'),
            __DIR__.'/../resources/views/components/date-picker' => resource_path('views/components/date-picker'),
        ], 'umbra-ui-interactive');
    }
}