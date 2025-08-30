# UmbraUI

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ihxnnxs/umbra-ui.svg?style=flat-square)](https://packagist.org/packages/ihxnnxs/umbra-ui)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/ihxnnxs/UmbraUI/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/ihxnnxs/UmbraUI/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/ihxnnxs/UmbraUI/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/ihxnnxs/UmbraUI/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ihxnnxs/umbra-ui.svg?style=flat-square)](https://packagist.org/packages/ihxnnxs/umbra-ui)

Modern UI components library for Laravel applications. UmbraUI provides a collection of beautiful, customizable components that help you build elegant user interfaces quickly and efficiently.

## Components Status

| Component | Status |
|-----------|--------|
| **Form Components** |  |
| Button | ⏳ Planned |
| Input | ⏳ Planned |
| Textarea | ⏳ Planned |
| Select | ⏳ Planned |
| Checkbox | ⏳ Planned |
| Radio | ⏳ Planned |
| File Upload | ⏳ Planned |
| **Layout Components** |  |
| Container | ⏳ Planned |
| Grid | ⏳ Planned |
| Card | ⏳ Planned |
| Modal | ⏳ Planned |
| Sidebar | ⏳ Planned |
| **Navigation Components** |  |
| Navbar | ⏳ Planned |
| Breadcrumb | ⏳ Planned |
| Pagination | ⏳ Planned |
| Tabs | ⏳ Planned |
| **Feedback Components** |  |
| Alert | ⏳ Planned |
| Toast | ⏳ Planned |
| Progress Bar | ⏳ Planned |
| Spinner | ⏳ Planned |
| **Data Display Components** |  |
| Table | ⏳ Planned |
| List | ⏳ Planned |
| Badge | ⏳ Planned |
| Avatar | ⏳ Planned |
| **Utility Components** |  |
| Dropdown | ⏳ Planned |
| Tooltip | ⏳ Planned |
| Popover | ⏳ Planned |
| Accordion | ⏳ Planned |

**Status Legend:**
- ❌ Not Available
- ⏳ Planned
- ✅ Ready


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

```php
use Ihxnnxs\UmbraUI\Facades\UmbraUI;

// Use UmbraUI components in your Blade templates
@umbraui('button', ['variant' => 'primary', 'text' => 'Click me'])
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
