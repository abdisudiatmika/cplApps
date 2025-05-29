<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
require __DIR__.'/auth.php';
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DosenController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth'])->group(function () {
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    });

    Route::middleware(['role:dosen'])->group(function () {
        Route::get('/dosen', [DosenController::class, 'index'])->name('dosen.dashboard');
    });

});
Route::get('/redirect', function () {
    $user = auth()->user();

    if (!$user) {
        return redirect('/login');
    }

    return match ($user->role) {
        'admin' => redirect()->route('admin.dashboard'),
        'dosen' => redirect()->route('dosen.dashboard'),
        default => abort(403, 'Role tidak dikenali.'),
    };
})->middleware(['auth']);

