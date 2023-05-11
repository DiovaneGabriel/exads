<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, "index"]);
Route::get('/prime-numbers', [PrimeNumbersController::class, "index"]);
Route::get('/ascii-array', [ASCIIArrayController::class, "index"]);
Route::get('/tv-series', [TVSeriesController::class, "index"]);
Route::get('/ab-testing', [ABTestingController::class, "index"]);