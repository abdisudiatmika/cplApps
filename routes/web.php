<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CplController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BobotCplController;
use App\Http\Controllers\NilaiMahasiswaController;
use App\Http\Controllers\DosenMataKuliahController;
use App\Http\Controllers\LoginDosenController;
use Illuminate\Support\Facades\Auth;

// Halaman Utama
Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('dosendashboard', [DosenController::class, 'dashboard'])->name('dosendashboard');

// Resource CRUD
Route::resource('pengajar', DosenController::class);
Route::resource('cpl', CplController::class);
Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('mata-kuliah', MataKuliahController::class);

// Admin - Input bobot CPL global
Route::get('/bobot-cpl/create', [BobotCplController::class, 'create'])->name('bobot-cpl.create');
Route::post('/bobot-cpl/store', [BobotCplController::class, 'store'])->name('bobot-cpl.store');

// Dosen Routes
Route::get('/dosen/matakuliah/{id}/bobot-cpl', [BobotCplController::class, 'dosenCreate'])->name('dosen.bobot-cpl');
Route::post('/dosen/matakuliah/{id}/bobot-cpl', [BobotCplController::class, 'dosenStore'])->name('dosen.bobot-cpl.store');

// Dashboard
Route::get('/dashboard', function () {
    return redirect('/cpl');
})->name('dashboard');

// Logout
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
});

// Login Dosen Khusus
Route::get('/login-dosen', [LoginDosenController::class, 'showLoginForm'])->name('dosen.login.form');
Route::post('/login-dosen', [LoginDosenController::class, 'login'])->name('dosen.login');

// Atur Mata Kuliah
Route::get('/dosen/{dosen}/assign-matakuliah', [DosenController::class, 'assignMatakuliahForm'])->name('dosen.assign.form');
Route::post('/dosen/{dosen}/assign-matakuliah', [DosenController::class, 'assignMatakuliah'])->name('dosen.assign');

// ✅ Tambahkan baris ini jika belum:
require __DIR__.'/auth.php';
