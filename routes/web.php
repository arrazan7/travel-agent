<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\AdminController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', [LandingPageController::class, 'home'])->name('home');
Route::get('/login', [LandingPageController::class, 'login'])->name('login');
Route::get('/register', [LandingPageController::class, 'register'])->name('register');
Route::get('/pilih-paket', [PaketController::class, 'pilihPaket'])->name('pilih-paket');
Route::get('/paket', [PaketController::class, 'paket'])->name('paket');
Route::get('/detail-paket', [PaketController::class, 'detailPaket'])->name('detail-paket');
Route::get('data-diri', [PaketController::class, 'dataDiri'])->name('data-diri');
Route::get('/konfirmasi', [PaketController::class, 'konfirmasi'])->name('konfirmasi');
Route::get('/bukti-pembayaran', [PaketController::class, 'buktiPembayaran'])->name('bukti-pembayaran');
Route::get('/custom-paket', [PaketController::class, 'customPaket'])->name('custom-paket');

Route::get('/public-dashboard', [PaketController::class, 'publicDashboard'])->name('public-dashboard');
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
