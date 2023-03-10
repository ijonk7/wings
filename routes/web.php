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

Auth::routes();
Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/checkout', [App\Http\Controllers\HomeController::class, 'checkout'])->name('checkout');
Route::post('/confirm', [App\Http\Controllers\HomeController::class, 'confirm'])->name('confirm');
Route::get('/laporan', [App\Http\Controllers\HomeController::class, 'laporan'])->name('laporan');
