<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return view('Partials.content');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/daftar', function () {
//     return view('daftar');
// });

Route::get('/daftar', [AuthController::class, 'showRegister'])->name('daftar');
Route::post('/daftar', [AuthController::class, 'daftar']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Hanya bisa diakses jika login
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/comment', function () {
        return view('dashboard.comment');
    })->name('comment');

    Route::get('/komentar/create', [HomeController::class, 'create'])->name('komentar.create');
    Route::post('/komentar', [HomeController::class, 'store'])->name('komentar.store');
    Route::get('/komentar/{id}/edit', [HomeController::class, 'edit'])->name('komentar.edit');
    Route::put('/komentar/{id}', [HomeController::class, 'update'])->name('komentar.update');
    Route::delete('/komentar/{id}', [HomeController::class, 'destroy'])->name('komentar.destroy');
    
});

Route::get('/struktur', function () {
    return view('struktur');
});

Route::get('/dokumentasi', function () {
    return view('dokumentasi');
});

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/login'); // atau ke '/' sesuai kebutuhan
})->name('logout');

Route::post('/komentar', [HomeController::class, 'store'])->name('home.store');

// Untuk upload berita (form)
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.create');
Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create');

// Untuk simpan berita ke database
Route::post('/berita/store', [BeritaController::class, 'store'])->name('berita.store');

// Untuk menampilkan home (berita + komentar)
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
