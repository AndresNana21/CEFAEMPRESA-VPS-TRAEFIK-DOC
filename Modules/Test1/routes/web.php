<?php

use Illuminate\Support\Facades\Route;
use Modules\Test1\Http\Controllers\Test1Controller;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('test1s', Test1Controller::class)->names('test1');
});
