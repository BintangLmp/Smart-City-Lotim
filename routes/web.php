<?php

    
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DimensiController;
use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\DestinasiController;

Route::get('/', HomeController::class)->name('home');
Route::get('/kontak', fn () => view('kontak'))->name('kontak');

// About
Route::prefix('about')->group(function () {
    Route::get('/', [AboutController::class, 'index'])->name('about');
    Route::get('/latar-belakang', [AboutController::class, 'latar'])->name('about.latar-belakang');
    Route::get('/visi-misi', [AboutController::class, 'visimisi'])->name('about.visi-misi');
    Route::get('/structural', [AboutController::class, 'structural'])->name('about.structural');
});

// Dimensi
Route::prefix('dimensi')->group(function () {
    Route::get('/', [DimensiController::class, 'index'])->name('dimensi.index');
    Route::get('/{slug}', [DimensiController::class, 'show'])->name('dimensi.show');
});

//destinasi
Route::resource('/destinasi', DestinasiController::class)->only(['index', 'show']);

// aspirasi
Route::get('/aspirasi', [AspirasiController::class, 'index'])->name('aspirasi');
Route::post('/aspirasi', [AspirasiController::class, 'store'])->name('aspirasi.store');
Route::get('/aspirasi/create', [AspirasiController::class, 'create'])->name('aspirasi.create');

Route::resource('/artikel', ArtikelController::class)->only(['index', 'show']);



//galeri
Route::prefix('galeri')->group(function () {
    Route::get('/', [GaleriController::class, 'index'])->name('galeri');
});

