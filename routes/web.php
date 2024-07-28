<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GamNiVigatController;
use App\Http\Controllers\YojanoController;
use App\Http\Controllers\HealthQuestionsController;
use App\Http\Controllers\EducationQuestionsController;
use App\Http\Controllers\SupplyQuestionController;
use App\Http\Controllers\WaterQuestionController;
use App\Http\Controllers\ElectricityQuestionController;
use App\Http\Controllers\RoadQuestionController;
use App\Http\Controllers\SewerQuestionController;
use App\Http\Controllers\CleanlinessQuestionController;
use App\Http\Controllers\PolutionQuestionController;
use App\Http\Controllers\RevenueQuestionController;
use App\Http\Controllers\AnganwadiQuestionController;
use App\Http\Controllers\BankingQuestionController;
use App\Http\Controllers\GramPanchayatQuestionController;
use App\Http\Controllers\OtherQuestionController;

Route::get('/', function () {
    return view('login');
});
// Auth Routes Starts
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// Auth Routes END

// View Routes Start
Route::get('/gam-ni-vigat', [GamNiVigatController::class, 'index'])->name('gam-ni-vigat-index');
Route::get('/yojano', [YojanoController::class, 'index'])->name('yojano-index');
Route::get('/health-questions', [HealthQuestionsController::class, 'index'])->name('health-questions-index');
Route::get('/education-questions', [EducationQuestionsController::class, 'index'])->name('education-questions-index');
Route::get('/supply-questions', [SupplyQuestionController::class, 'index'])->name('supply-questions-index');
Route::get('/water-questions', [WaterQuestionController::class, 'index'])->name('water-questions-index');
Route::get('/electricity-questions', [ElectricityQuestionController::class, 'index'])->name('electricity-questions-index');
Route::get('/road-questions', [RoadQuestionController::class, 'index'])->name('road-questions-index');
Route::get('/sewer-questions', [SewerQuestionController::class, 'index'])->name('sewer-questions-index');
Route::get('/cleanliness-questions', [CleanlinessQuestionController::class, 'index'])->name('cleanliness-questions-index');
Route::get('/polution-questions', [PolutionQuestionController::class, 'index'])->name('polution-questions-index');
Route::get('/revenue-questions', [RevenueQuestionController::class, 'index'])->name('revenue-questions-index');
Route::get('/anganwadi-questions', [AnganwadiQuestionController::class, 'index'])->name('anganwadi-questions-index');
Route::get('/banking-questions', [BankingQuestionController::class, 'index'])->name('banking-questions-index');
Route::get('/grampanchayat-questions', [GramPanchayatQuestionController::class, 'index'])->name('grampanchayat-questions-index');
Route::get('/other-questions', [OtherQuestionController::class, 'index'])->name('other-questions-index');
// View Routes END

// Storing Routes Starts Here
Route::post('/gam-ni-vigat/store', [GamNiVigatController::class, 'store'])->name('gam-ni-vigat.store');
Route::post('/yojano/store', [YojanoController::class, 'store'])->name('yojano.store');
Route::post('/health/store', [HealthQuestionsController::class, 'store'])->name('health-questions.store');
Route::post('/education/store', [EducationQuestionsController::class, 'store'])->name('education-questions.store');
Route::post('/anganwadi/store', [AnganwadiQuestionController::class, 'store'])->name('anganwadi-questions.store');
Route::post('/supply/store', [SupplyQuestionController::class, 'store'])->name('supply-questions.store');
Route::post('/water/store', [WaterQuestionController::class, 'store'])->name('water-questions.store');
Route::post('/electricity/store', [ElectricityQuestionController::class, 'store'])->name('electricity-questions.store');

// Storing Routes Starts END