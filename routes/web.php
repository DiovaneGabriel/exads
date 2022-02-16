<?php

use App\Http\Controllers\HomeController;
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
Route::get('/prime-numbers', [HomeController::class, "prime_numbers"]);
Route::get('/ascii-array', [HomeController::class, "ascii_array"]);
Route::get('/tv-series', [HomeController::class, "tv_series"]);
