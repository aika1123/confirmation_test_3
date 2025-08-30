<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\WeightLogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('guest')->group(function () {
    Route::get ('/register/step1',  [ContentController::class, 'showStep1'])->name('register.step1');
    Route::post('/register/step1', [ContentController::class, 'postStep1'])->name('register.step1.post');

    Route::get ('/register/step2',  [ContentController::class, 'showStep2'])->name('register.step2');
    Route::post ('/register/step2',  [ContentController::class, 'postStep2'])->name('register.step2.post');
    Route::middleware('auth')->group(function () {
    Route::get('/weight_logs', [WeightLogController::class, 'index'])
        ->name('weight_logs.index');
    });
});

