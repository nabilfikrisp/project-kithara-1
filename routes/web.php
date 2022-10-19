<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReparasiController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/home', [IndexController::class, 'visitLanding'])->name('landing');
Route::get('/login', [LoginController::class, 'visitLogin'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'visitRegister'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/reparasi', [ReparasiController::class, 'visitReparasi'])->name('reparasi');
Route::get('/reparasi/head', [ReparasiController::class, 'visitReparasiHead'])->name('reparasiHead');
Route::get('/reparasi/neck', [ReparasiController::class, 'visitReparasiNeck'])->name('reparasiNeck');
Route::get('/reparasi/body', [ReparasiController::class, 'visitReparasiBody'])->name('reparasiBody');

Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout');
Route::get('/cek-resi', [IndexController::class, 'visitCekResi'])->name('cekResi');
