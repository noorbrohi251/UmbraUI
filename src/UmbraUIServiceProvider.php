<?php

namespace Ihxnnxs\UmbraUI;

use Illuminate\Support\ServiceProvider;

class UmbraUIServiceProvider extends ServiceProvider
{
    protected array $components = [
        'accordion',
        'alert',
        'button',
        'card',
        'checkbox',
        'date-picker',
        'field',
        'input',
        'label',
        'link',
        'modal',
        'radio',
        'select',
        'slider',
        'switch',
        'tabs',
        'textarea',
    ];

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'umbra-ui');

        foreach ($this->components as $component) {
            $this->publishes([
                __DIR__."/../resources/views/components/{$component}" => resource_path("views/components/{$component}"),
            ], $component);
        }

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/umbra-ui'),
        ], 'umbra-ui-views');
    }
}
