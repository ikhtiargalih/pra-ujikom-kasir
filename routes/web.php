<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;


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

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login/auth', [AuthController::class, 'auth'])->name('auth.login');

// user
Route::get('/dashboard/user', [UserController::class, 'dashboardUser'])->name('dashboard.kasir');
Route::get('/kasir/produk', [UserController::class, 'kasirProduk'])->name('produk');
Route::get('/kasir/pembelian', [UserController::class, 'kasirPembelian'])->name('pembelian');

// admin
Route::get('/dashboard/admin', [AdminController::class, 'dashboardAdmin'])->name('dashboard.admin');
Route::get('/kasir/produk', [AdminController::class, 'Produk'])->name('produk');
Route::get('/kasir/pembelian', [AdminController::class, 'Pembelian'])->name('pembelian');

