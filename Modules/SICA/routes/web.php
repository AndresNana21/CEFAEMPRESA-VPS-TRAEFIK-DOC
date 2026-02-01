<?php

use Illuminate\Support\Facades\Route;
use Modules\SICA\Http\Controllers\SICAController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('sicas', SICAController::class)->names('sica');
});
