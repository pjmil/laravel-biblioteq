<?php

use Illuminate\Support\Facades\Route;

Route::get('{item?}', [Pjmil\Biblioteq\BiblioteqController::class, 'show'])->where('item', '.*');