<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ProfilKotaController;
use App\Http\Controllers\InformasiPublikController;


// =======================
// Halaman Depan (Publik)
// =======================
Route::get('/', [HomeController::class, 'index'])->name('home');
// Halaman Depan
Route::get('/', [HomeController::class, 'index'])->name('home');

// Pencarian
Route::get('/search', [HomeController::class, 'search'])->name('search');

// Berita
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.show');

// Profil Kota
Route::get('/profil', [ProfilKotaController::class, 'index'])->name('profil');
Route::get('/profil/sambutan-walikota', [ProfilKotaController::class, 'sambutan'])->name('profil.sambutan');
Route::get('/profil/sejarah-kota', [ProfilKotaController::class, 'sejarah'])->name('profil.sejarah');
Route::get('/profil/visi-misi', [ProfilKotaController::class, 'visimisi'])->name('profil.visimisi');

// Layanan
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');

// Galeri
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');

// Kontak
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');

// =======================
// Informasi Publik
// =======================
Route::prefix('informasi-publik')->name('informasi-publik.')->group(function () {
    Route::get('/', [InformasiPublikController::class, 'index'])->name('index');
    Route::get('/ppid', [InformasiPublikController::class, 'ppid'])->name('ppid');
    Route::get('/laporan', [InformasiPublikController::class, 'laporan'])->name('laporan');
    Route::get('/dokumen', [InformasiPublikController::class, 'dokumen'])->name('dokumen');
});

// =======================
// Admin Area (Login Diperlukan)
// =======================
Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // CRUD untuk berita, profil, layanan, galeri, kontak
    Route::resource('/berita', BeritaController::class)->except(['show']);
    Route::resource('/profil', ProfilKotaController::class)->except(['index']);
    Route::resource('/layanan', LayananController::class)->except(['index']);
    Route::resource('/galeri', GaleriController::class)->except(['index']);
    Route::resource('/kontak', KontakController::class)->except(['index']);

    // Pengaturan Profil Admin
    Route::get('/profile', [ProfilKotaController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfilKotaController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfilKotaController::class, 'destroy'])->name('profile.destroy');
});

// =======================
// Otentikasi
// =======================
require __DIR__.'/auth.php';
