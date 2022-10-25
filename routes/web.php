<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReparasiController;
use App\Http\Controllers\HandleOrderController;
use App\Http\Controllers\ManageOrderController;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [IndexController::class, 'visitLanding'])->name('landing');
Route::get('/login', [LoginController::class, 'visitLogin'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'visitRegister'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/profile', [LoginController::class, 'visitProfile'])->name('profile');

Route::get('/reparasi', [ReparasiController::class, 'visitReparasi'])->name('reparasi')->middleware('auth');
Route::get('/reparasi/head', [ReparasiController::class, 'visitReparasiHead'])->name('reparasiHead');
Route::get('/reparasi/neck', [ReparasiController::class, 'visitReparasiNeck'])->name('reparasiNeck');
Route::get('/reparasi/body', [ReparasiController::class, 'visitReparasiBody'])->name('reparasiBody');

Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout');
Route::post('/checkout', [OrderController::class, 'handleOrder']);
Route::get('/checkout-neck', [OrderController::class, 'checkoutNeck']);
Route::post('/checkout-neck', [OrderController::class, 'handleOrderNeck']);
Route::get('/checkout-body', [OrderController::class, 'checkoutBody']);
Route::post('/checkout-body', [OrderController::class, 'handleOrderBody'])->name('checkout-body');
Route::post('/handle-checkout', [OrderController::class, 'handleCheckout']);
Route::get('/cek-resi', [IndexController::class, 'visitCekResi'])->name('cekResi');

Route::get('/admin', [AdminController::class, 'visitAdmin'])->name('admin')->middleware('auth');
Route::get('/admin/user', [AdminController::class, 'visitUser'])->name('adminUser')->middleware('auth');
Route::get('/admin/service', [AdminController::class, 'visitService'])->name('adminService')->middleware('auth');
// Route::get('/admin/order', [AdminController::class, 'visitOrder'])->name('adminOrder')->middleware('auth');

// Route::get('/admin/order/edit', [ManageOrderController::class, 'index'])->name('adminEditOrder')->middleware('auth');

Route::resource('/admin/orders', HandleOrderController::class)->middleware('auth');
