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
use App\Http\Controllers\ApbdController;
use App\Http\Controllers\IpkdController;
use App\Http\Controllers\DokumenController;

// Admin Controllers
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminBeritaController;
use App\Http\Controllers\Admin\AdminProfilController;
use App\Http\Controllers\Admin\AdminLayananController;
use App\Http\Controllers\Admin\AdminGaleriController;
use App\Http\Controllers\Admin\AdminKontakController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\Auth\AdminLoginController;
use App\Http\Controllers\Admin\Auth\AdminRegisterController;

/*
|--------------------------------------------------------------------------
| Language Switcher Route
|--------------------------------------------------------------------------
*/
Route::get('/lang/{lang}', function ($lang) {
    if (in_array($lang, ['id', 'en'])) {
        session(['locale' => $lang]);
    }
    return redirect()->back();
})->name('lang.switch');

/*
|--------------------------------------------------------------------------
| Admin Authentication
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->group(function () {
    // Admin Guest Routes (Login & Register)
    Route::middleware('guest:admin')->group(function () {
        Route::get('login', [AdminLoginController::class, 'showLoginForm'])->name('login');
        Route::post('login', [AdminLoginController::class, 'login']);

        Route::get('register', [AdminRegisterController::class, 'showRegistrationForm'])->name('register');
        Route::post('register', [AdminRegisterController::class, 'register']);
    });

    // Admin Authenticated Routes
    Route::middleware('auth:admin')->group(function () {
        Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
        Route::post('logout', [AdminLoginController::class, 'logout'])->name('logout');
    });
});

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/
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

// APBD
Route::prefix('apbd')->group(function () {
    Route::get('/', [ApbdController::class, 'index'])->name('apbd.index');
    Route::get('/{year}', [ApbdController::class, 'show'])->name('apbd.show');
});

// Layanan Publik
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');

// Galeri & Kontak
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');

// Informasi Publik
Route::prefix('informasi-publik')->name('informasi-publik.')->group(function () {
    Route::get('/', [InformasiPublikController::class, 'index'])->name('index');
    Route::get('/ppid', [InformasiPublikController::class, 'ppid'])->name('ppid');
    Route::get('/laporan', [InformasiPublikController::class, 'laporan'])->name('laporan');
    Route::get('/apbd', [ApbdController::class, 'index'])->name('apbd');
    Route::get('/apbd/{year}', [InformasiPublikController::class, 'showApbd'])->name('apbd.show');
    Route::get('/ipkd', [IpkdController::class, 'index'])->name('ipkd.index');
    Route::get('/ipkd/{id}', [IpkdController::class, 'show'])->name('ipkd.show');
    Route::get('/dokumen', [DokumenController::class, 'index'])->name('dokumen.index');
    Route::get('/dokumen/kategori/{id}', [DokumenController::class, 'kategori'])->name('dokumen.kategori');
});

/*
|--------------------------------------------------------------------------
| Admin Area (Role-based Management)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified', 'isAdmin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    Route::resource('berita', AdminBeritaController::class)->except(['show']);
    Route::resource('profil', AdminProfilController::class);
    Route::resource('galeri', AdminGaleriController::class);
    Route::resource('kontak', AdminKontakController::class);
    Route::resource('layanan', AdminLayananController::class);
    Route::resource('users', UserController::class);

    Route::get('/profile', [AdminProfilController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [AdminProfilController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [AdminProfilController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| Default Laravel Auth
|--------------------------------------------------------------------------
*/
require __DIR__ . '/auth.php';
