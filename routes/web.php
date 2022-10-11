<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
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

Route::get('/reparasi', [ReparasiController::class, 'visitReparasi'])->name('reparasi');
Route::get('/reparasi/head', [ReparasiController::class, 'visitReparasiHead'])->name('reparasiHead');
Route::get('/reparasi/neck', [ReparasiController::class, 'visitReparasiNeck'])->name('reparasiNeck');
Route::get('/reparasi/body', [ReparasiController::class, 'visitReparasiBody'])->name('reparasiBody');
