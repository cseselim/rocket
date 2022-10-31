<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/',[\App\Http\Controllers\RocketController::class, 'create'])->name('create.rocket');
Route::post('rocket-date-store',[\App\Http\Controllers\RocketController::class, 'store'])->name('rocket-date-store');
