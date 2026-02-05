<?php

use Illuminate\Support\Facades\Route;
use Modules\Sica\Http\Controllers\SicaController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('sicas', SicaController::class)->names('sica');
});
