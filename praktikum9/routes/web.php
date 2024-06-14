<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\KelurahanController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
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
    
    Route::get('/', function () {
        return view('welcome');
    });
    
    Route::get('/kabar', function () {
        return view('kondisi');
    });
    
    Route::get('/nilai', function () {
        return view('nilai');
    });
    
    Route::get('/', function () {
        return view('welcome');
    });
    
    Route::get('/', function () {
        return view('page');
    });
    
    Route::get('/admin', [AdminController::class, 'index']);
    //pasien
    Route::get('/admin/pasien', [PasienController::class, 'index'])->name('pasien.index');
    Route::get('/admin/pasien/create', [PasienController::class, 'create'])->name('pasiens.create');
    Route::post('/admin/pasien/store', [PasienController::class, 'store'])->name('pasiens.store');
    Route::get('/admin/pasien/{pasien}', [PasienController::class, 'show'])->name('pasiens.show');
    Route::get('/admin/pasien/{pasien}/edit', [PasienController::class, 'edit'])->name('pasiens.edit');
    Route::put('/admin/pasien/{pasien}', [PasienController::class, 'update'])->name('pasiens.update');
    Route::delete('/admin/pasien/{pasien}', [PasienController::class, 'destroy'])->name('pasiens.destroy');
    
    // Kelurahan
    Route::get('/admin/kelurahan', [KelurahanController::class, 'index'])->name('kelurahans.index');
    Route::get('/admin/kelurahan/create', [KelurahanController::class, 'create'])->name('kelurahans.create');
    Route::post('/admin/kelurahan/store', [KelurahanController::class, 'store'])->name('kelurahans.store');
    Route::get('/admin/kelurahan/{kelurahan}', [KelurahanController::class, 'show'])->name('kelurahans.show');
    Route::get('/admin/kelurahan/{kelurahan}/edit', [KelurahanController::class, 'edit'])->name('kelurahans.edit');
    Route::put('/admin/kelurahan/{kelurahan}', [KelurahanController::class, 'update'])->name('kelurahans.update');
    Route::delete('/admin/kelurahan/{kelurahan}', [KelurahanController::class, 'destroy'])->name('kelurahans.destroy');
    
    
});


require __DIR__.'/auth.php';
