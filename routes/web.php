<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\ProfilsekolahController;
use App\Http\Controllers\SiswaController;
use App\Models\profil_sekolah;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DashboardController::class, 'indexPublic'])->name('public.dashboard');
Route::get('/login', [AuthController::class, 'login'])->name('admin.login');
Route::post('/login-proses', [AuthController::class, 'prosesLogin'])->name('admin.login_proses');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::prefix('siswa')->group(function () {
        Route::get('/', [SiswaController::class, 'index'])->name('admin.siswa');
    });

    Route::prefix('guru')->group(function () {
        Route::get('/', [GuruController::class, 'index'])->name('admin.guru');

    });

    Route::get('/galeri', [GaleriController::class, 'index'])->name('admin.galeri');
    Route::get('/berita', [BeritaController::class, 'index'])->name('admin.berita');
    Route::get('/eskul', [EkstrakurikulerController::class, 'index'])->name('admin.eskul');

    Route::prefix('profil')->group(function () {
        Route::get('/', [ProfilsekolahController::class, 'index'])->name('admin.profil');
        Route::get('{id}/edit', [profil_sekolah::class, 'edit'])->name('admin.profil.edit');
    });
});


