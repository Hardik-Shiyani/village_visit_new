<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/gam-ni-vigat/store', [GamNiVigatController::class, 'store'])->name('gam-ni-vigat.store');