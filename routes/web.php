<?php

use App\Http\Controllers\Web\HomeController;
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

Route::get('/', HomeController::class . '@index');
Route::get('/dashboard', HomeController::class . '@home')->name('dashboard');
Route::get('/absen', HomeController::class . '@absen')->name('absen');
Route::get('/detail', HomeController::class . '@detail')->name('detail');