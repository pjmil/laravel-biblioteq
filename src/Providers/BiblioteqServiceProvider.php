<?php

namespace Pjmil\Biblioteq\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class BiblioteqServiceProvider extends ServiceProvider
{
    public const VIEW_PATH = __DIR__ . '/../../resources/views';
    public const ROUTE_PATH = __DIR__ . '/../routes.php';

    public function boot(): void
    {
        $this->loadViewsFrom(static::VIEW_PATH, 'biblioteq');
        $this->loadRoutesFrom(static::ROUTE_PATH);
        $this->publishes(
            [
                static::VIEW_PATH => resource_path('views/vendor/biblioteq'),
            ],
            'biblioteq',
        );

        View::addNamespace('biblio', static::VIEW_PATH);

        Blade::anonymousComponentPath(static::VIEW_PATH . '/components', 'biblio');
    }
}
