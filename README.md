# Laravel Biblioteq

Simple UI component viewer for Blade components.

A tiny Laravel package to browse and preview Blade components from a local `resources/views/components` directory.

**Installation**

- Require the package via Composer:

```bash
composer require pjmil/laravel-biblioteq
```

- The package registers its service provider automatically. If you need to register it manually, add the provider to `config/app.php` providers:

```php
Pjmil\Biblioteq\BiblioteqServiceProvider::class,
```

**Publish config & views (optional)**

```bash
php artisan vendor:publish --provider="Pjmil\Biblioteq\BiblioteqServiceProvider" --tag="config"
php artisan vendor:publish --provider="Pjmil\Biblioteq\BiblioteqServiceProvider" --tag="views"
```

**Usage**

- Visit the package route in your application to browse components. The package provides a simple index and preview UI for components.
- When you open a component the package will try to extract `@props([...])` from the component to display example options.
- Components are referenced using dot notation (the same notation used by Blade's `x-dynamic-component`):
  - Example component path: `components/button/primary.blade.php` -> component name `button.primary`.

**Configuration**

The configuration file is located at [config/biblioteq.php](config/biblioteq.php#L1-L20). Available options and defaults:

- **components_path**: `resource_path('views/components')`
- **valid_exts**: `['.blade.php']`
- **exclude_dirs**: `['/cms']`

Adjust `components_path` if your components live somewhere else, or add directories to `exclude_dirs` to ignore them.

**Files**

- Service provider: [src/BiblioteqServiceProvider.php](src/BiblioteqServiceProvider.php#L1-L80)
- Controller: [src/BiblioteqController.php](src/BiblioteqController.php#L1-L200)
- Routes: [routes/web.php](routes/web.php#L1-L40)
- Views: [resources/views/layout.blade.php](resources/views/layout.blade.php#L1-L200)

**License**

This repository currently lists a proprietary license in `composer.json`.

**Development**

To develop locally, you can use Composer's path repositories or `composer require` your local copy while working on the package.

---

If you want, I can run a quick local check (lint) or open the README for review/editing. What would you like next?