<?php

use App\Http\Controllers\ABTestingController;
use App\Http\Controllers\ASCIIArrayController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrimeNumbersController;
use App\Http\Controllers\TVSeriesController;
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

Route::get('/', [HomeController::class, "index"]);
Route::get('/prime-numbers', [PrimeNumbersController::class, "index"]);
Route::get('/ascii-array', [ASCIIArrayController::class, "index"]);
Route::get('/tv-series', [TVSeriesController::class, "index"]);
Route::get('/ab-testing', [ABTestingController::class, "index"]);
