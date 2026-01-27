<?php

use Illuminate\Support\Facades\Route;
use Modules\Test1\Http\Controllers\Test1Controller;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('test1s', Test1Controller::class)->names('test1');
});
