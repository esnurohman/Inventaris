<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\OverviewController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RiwayatTransaksiController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('pages.home');
});
// Dashboard route
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [OverviewController::class, 'index'])->name('dashboard');
    
    //route resource for barang
    Route::resource('/dashboard/barang', BarangController::class)->except('show');
    //route resource for category
    Route::resource('/dashboard/kategori', KategoriController::class)->except('show');
    //route resource for supplier
    Route::resource('/dashboard/supplier', SupplierController::class)->except('show');
    //route resource for riwayat transaksi
    Route::resource('/dashboard/riwayat-transaksi', RiwayatTransaksiController::class)->except('show');
});


// Route::get('/dashboard', function () {
//     return view('pages.overview');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';