<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\KegiatanKomunitasController;
use App\Http\Controllers\KomunitasController;
use App\Http\Controllers\LandingPageUser;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

# Router User
// Route::get('/', [LandingPageUser::class, 'index'])->name('user.index');

# Router Admin
Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/dashboard', [DashboardAdminController::class, 'index'])->name('dashboard');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

# Router Anggota
Route::resource('anggota', AnggotaController::class);
Route::get('/', [AnggotaController::class, 'landingPage'])->name('user.pengurus');

# Router Kegiatan
Route::resource('kegiatan', KegiatanController::class);

# Router Komunitas
Route::resource('komunitas', KomunitasController::class);

# Router Kegiatan Komunitas
Route::resource('kegiatan_komunitas', KegiatanKomunitasController::class);