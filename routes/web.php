<?php

// routes/web.php

use App\Http\Controllers\KoleksiController;
use App\Http\Controllers\ProfileController; // WAJIB: Untuk rute profile.edit
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/* ... */

// Rute Halaman Utama (Home Page)
Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    }
    return view('welcome');
})->name('home');


// Rute Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Rute CRUD untuk Barang Koleksi
Route::resource('koleksi', KoleksiController::class)
    ->middleware(['auth']);

// Rute Profile (PENTING untuk menghindari error 'profile.edit not defined')
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php'; // Login/Register Routes