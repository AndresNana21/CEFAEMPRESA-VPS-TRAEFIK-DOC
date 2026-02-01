<?php

use Illuminate\Support\Facades\Route;
use Modules\SICA\Http\Controllers\SICAController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('sicas', SICAController::class)->names('sica');
});
