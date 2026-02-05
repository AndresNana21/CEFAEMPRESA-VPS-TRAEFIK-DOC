<?php

use Illuminate\Support\Facades\Route;
use Modules\Sica\Http\Controllers\SicaController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('sicas', SicaController::class)->names('sica');
});
