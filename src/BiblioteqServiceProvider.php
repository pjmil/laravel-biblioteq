<?php

namespace Pjmil\Biblioteq;

use Spatie\LaravelPackageTools\PackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class BiblioteqServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package) : void
    {
        $package->name('pjmil/laravel-biblioteq')
            ->hasRoute('routes')
            ->hasViews('biblioteq')
            ->publishesServiceProvider('BiblioteqServiceProvider');
    }
}
