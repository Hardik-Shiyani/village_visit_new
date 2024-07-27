<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GamNiVigatController;
use App\Http\Controllers\YojanoController;
use App\Http\Controllers\HealthQuestionsController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/gam-ni-vigat', [GamNiVigatController::class, 'index'])->name('gam-ni-vigat-index');


Route::get('/yojano', [YojanoController::class, 'index'])->name('yojano-index');

Route::get('/health-questions', [HealthQuestionsController::class, 'index'])->name('health-questions-index');












Route::post('/gam-ni-vigat/store', [GamNiVigatController::class, 'store'])->name('gam-ni-vigat.store');