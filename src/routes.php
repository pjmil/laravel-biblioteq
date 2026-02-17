<?php

namespace Pjmil\LaravelBiblioteq;

use Illuminate\Support\Facades\Route;

Route::get('/biblio/{item?}/', [Controllers\BiblioteqController::class, 'show'])->where(
    'item',
    '.*',
);
