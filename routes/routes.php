<?php

use Illuminate\Support\Facades\Route;

Route::namespace('Pjmil\Biblioteq')
    ->prefix('biblioteq')
    ->viewNamespace('biblioteq')
    ->group(function() {
        Route::get('{item?}', [Pjmil\Biblioteq\BiblioteqController::class, 'show'])->where('item', '.*');
    });