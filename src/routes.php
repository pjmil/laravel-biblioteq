<?php

namespace Pjmil\Biblioteq;

use Illuminate\Support\Facades\Route;

Route::get('/biblioteq/{item?}/', [Controllers\BiblioteqController::class, 'show'])
    ->where('item', '.*');
