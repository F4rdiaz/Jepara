<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Public Controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProfilKotaController;
use App\Http\Controllers\InformasiPublikController;

// Admin Controllers
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminBeritaController;
use App\Http\Controllers\Admin\AdminProfilController;
use App\Http\Controllers\Admin\AdminLayananController;
use App\Http\Controllers\Admin\AdminGaleriController;
use App\Http\Controllers\Admin\AdminKontakController;

// =======================
// Language Switcher Route
// =======================
Route::get('/lang/{lang}', function($lang){
    if(in_array($lang, ['id','en'])){
        session(['locale' => $lang]);
    }
    return redirect()->back();
})->name('lang.switch');

// =======================
// Halaman Depan (Publik)
// =======================
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/search', [HomeController::class, 'search'])->name('search');

// Berita
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');

// Profil Kota
Route::prefix('profil')->name('profil.')->group(function () {
    Route::get('/', [ProfilKotaController::class, 'index'])->name('index');
    Route::get('/sambutan-walikota', [ProfilKotaController::class, 'sambutan'])->name('sambutan');
    Route::get('/sejarah-kota', [ProfilKotaController::class, 'sejarah'])->name('sejarah');
    Route::get('/visi-misi', [ProfilKotaController::class, 'visimisi'])->name('visimisi');
});

// Layanan Publik (untuk semua orang)
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');

// Galeri dan Kontak
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');

// Informasi Publik
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
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    // Admin CRUD
    Route::resource('admin-berita', AdminBeritaController::class)->except(['show']);
    Route::resource('admin-profil', AdminProfilController::class);
    Route::resource('admin-galeri', AdminGaleriController::class);
    Route::resource('admin-kontak', AdminKontakController::class);
    Route::resource('admin-layanan', AdminLayananController::class); // Admin CRUD Layanan

    // Profil Admin
    Route::get('/profile', [AdminProfilController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [AdminProfilController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [AdminProfilController::class, 'destroy'])->name('profile.destroy');
});

// Otentikasi
require __DIR__.'/auth.php';
