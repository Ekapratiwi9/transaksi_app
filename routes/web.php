<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TransaksiController;

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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('transaksi_filter', [TransaksiController::class, 'filterByDate'])->name('transaksi.date');
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::resource('kategori', KategoriController::class);
Route::resource('transaksi', TransaksiController::class);
