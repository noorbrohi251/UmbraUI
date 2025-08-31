<?php

// config for Ihxnnxs/UmbraUI
return [
    /*
    |--------------------------------------------------------------------------
    | Global Component Registration
    |--------------------------------------------------------------------------
    |
    | When set to true, components can be used without the 'umbra-ui::' prefix.
    | For example: <x-button> instead of <x-umbra-ui::button>
    | When false, you must always use the prefixed version.
    |
    */
    'register_global' => false,

    /*
    |--------------------------------------------------------------------------
    | Enabled Components
    |--------------------------------------------------------------------------
    |
    | Specify which components should be globally available when 'register_global' is true.
    | Leave empty to enable all components globally.
    | This allows you to selectively enable only the components you need.
    |
    | Available components: 'alert', 'button', 'input', 'textarea', 'select', 
    | 'checkbox', 'radio', 'label', 'link', 'field', 'card', 'modal', 'tabs', 
    | 'accordion', 'switch', 'slider', 'date-picker'
    |
    */
    'enabled_components' => [
        // 'button',
        // 'input',
        // 'alert',
        // Add only the components you want to use globally
    ],

    /*
    |--------------------------------------------------------------------------
    | Component Theme
    |--------------------------------------------------------------------------
    |
    | Default theme settings for components
    |
    */
    'theme' => [
        'dark_mode' => 'auto', // 'auto', 'light', 'dark'
        'color_scheme' => 'neutral', // 'neutral', 'blue', 'green', etc.
    ],

    /*
    |--------------------------------------------------------------------------
    | Publishing Groups
    |--------------------------------------------------------------------------
    |
    | These groups allow you to publish related components together:
    | 
    | Forms: button, input, textarea, select, checkbox, radio, label, field
    | Layout: alert, card, modal
    | Navigation: tabs, accordion
    | Interactive: switch, slider, date-picker
    |
    */
];