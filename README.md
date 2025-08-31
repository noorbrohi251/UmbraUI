  <p align="center">
  <img src="images/logo/LightLogo.png" alt="UmbraUI Light Theme" width="50">
</p>

<h1 align="center">UmbraUI</h1>

<p align="center">
  <a href="https://packagist.org/packages/ihxnnxs/umbra-ui"><img src="https://img.shields.io/packagist/v/ihxnnxs/umbra-ui.svg?style=flat-square" alt="Latest Version on Packagist"></a>
  <a href="https://github.com/ihxnnxs/UmbraUI/actions?query=workflow%3Arun-tests+branch%3Amain"><img src="https://img.shields.io/github/actions/workflow/status/ihxnnxs/UmbraUI/run-tests.yml?branch=main&label=tests&style=flat-square" alt="GitHub Tests Action Status"></a>
  <a href="https://github.com/ihxnnxs/UmbraUI/actions?query=workflow%3A%22Fix+PHP+code+style+issues%22+branch%3Amain"><img src="https://img.shields.io/github/actions/workflow/status/ihxnnxs/UmbraUI/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square" alt="GitHub Code Style Action Status"></a>
  <a href="https://packagist.org/packages/ihxnnxs/umbra-ui"><img src="https://img.shields.io/packagist/dt/ihxnnxs/umbra-ui.svg?style=flat-square" alt="Total Downloads"></a>
</p>

**Essential UI components library for Laravel applications with Tailwind CSS**

<p align="center">
  <img src="images/preview/previewLight.png" alt="UmbraUI Light Theme" width="250">
  <img src="images/preview/previewDark.png" alt="UmbraUI Dark Theme" width="250">
</p>

UmbraUI focuses on providing the most essential UI components for modern web applications. Built with
accessibility-first design, dark/light theme support, and seamless Laravel integration.

## Essential Components

UmbraUI focuses on the most critical components for modern web applications, based on industry standards and popular
libraries like shadcn/ui, Tailwind UI, and Chakra UI.

### Core Form Components 🔨

| Component   | Status        | Description                            |
|-------------|---------------|----------------------------------------|
| Button      | 🔨 Developing | Primary, secondary, and variant styles |
| Input       | 🔨 Developing | Text, email, password, number inputs   |
| Link        | 🔨 Developing | Styled anchor elements                 |
| Textarea    | 🔨 Developing | Multi-line text input                  |
| Select      | 🔨 Developing | Dropdown selection                     |
| Checkbox    | 🔨 Developing | Boolean selection                      |
| Radio       | 🔨 Developing | Single choice selection                |
| Label       | 🔨 Developing | Form field labels                      |
| Field       | 🔨 Developing | Form field wrapper with validation     |
| Switch      | 🔨 Developing | Toggle switch                          |
| Slider      | 🔨 Developing | Range input                            |
| Date Picker | 🔨 Developing | Date selection                         |

### Navigation & Layout 🔨

| Component | Status        | Description                       |
|-----------|---------------|-----------------------------------|
| Tabs      | 🔨 Developing | Tabbed navigation interface       |
| Accordion | 🔨 Developing | Collapsible content sections      |
| Modal     | 🔨 Developing | Dialog/popup overlay              |
| Card      | 🔨 Developing | Universal card with image support |

### Coming Next 🚀

| Component | Status        | Priority |
|-----------|---------------|----------|
| Alert     | 🔨 Developing | High     |
| Badge     | 🔨 Developing | High     |
| Avatar    | ⏳ Planned     | Medium   |
| Dropdown  | ⏳ Planned     | Medium   |
| Toast     | ⏳ Planned     | Medium   |

**Why These Components?**

- **High Usage**: Based on analysis of popular UI libraries and real-world applications
- **Essential Patterns**: Covers 80% of common UI needs
- **Accessibility First**: All components built with ARIA compliance
- **Framework Agnostic**: Works with any Laravel project

## Installation

You can install the package via composer:

```bash
composer require ihxnnxs/umbra-ui
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="umbra-ui-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="umbra-ui-views"
```

## Usage

### Basic Components

```blade
{{-- Buttons --}}
<x-button>Primary Button</x-button>
<x-button type="submit" class="bg-blue-600">Custom Button</x-button>

{{-- Form Inputs --}}
<x-input type="email" placeholder="Enter email" />
<x-textarea placeholder="Your message..." />
<x-select>
    <option>Choose...</option>
    <option value="1">Option 1</option>
</x-select>

{{-- Form Controls --}}
<x-checkbox id="terms" />
<x-label for="terms">Accept Terms</x-label>

<x-radio name="choice" value="a" id="choice-a" />
<x-label for="choice-a">Choice A</x-label>

<x-switch id="notifications" />
```

### Advanced Components

```blade
{{-- Form Fields with Validation --}}
<x-field label="Email Address" error="Email is required">
    <x-input type="email" />
</x-field>

<x-field label="Message" helper="Maximum 500 characters">
    <x-textarea />
</x-field>

{{-- Navigation --}}
<x-tabs default-tab="overview">
    <x-tabs.nav>
        <x-tabs.tab value="overview">Overview</x-tabs.tab>
        <x-tabs.tab value="settings">Settings</x-tabs.tab>
    </x-tabs.nav>
    
    <x-tabs.panel value="overview">
        <p>Overview content...</p>
    </x-tabs.panel>
    
    <x-tabs.panel value="settings">
        <p>Settings content...</p>
    </x-tabs.panel>
</x-tabs>

{{-- Interactive Components --}}
<x-accordion>
    <x-slot name="title">FAQ Item</x-slot>
    Answer content goes here...
</x-accordion>

<x-slider min="0" max="100" value="50" />
<x-date-picker value="2025-01-15" />
```

### Cards

```blade
{{-- Simple Card --}}
<x-card>
    <h4>Card Title</h4>
    <p>Card content goes here...</p>
</x-card>

{{-- Card with Image --}}
<x-card>
    <x-slot name="image">
        <img src="image.jpg" alt="Description" class="w-full h-48 object-cover" />
    </x-slot>
    
    <x-slot name="header">
        <h4>Card with Image</h4>
    </x-slot>
    
    <p>Content with image and header.</p>
    
    <x-slot name="footer">
        <x-button>Action</x-button>
    </x-slot>
</x-card>
```

### Links

```blade
<x-link href="https://example.com">External Link</x-link>
<x-link href="/dashboard" class="text-blue-600">Custom Styled Link</x-link>
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [ihxnnxs](https://github.com/ihxnnxs)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
