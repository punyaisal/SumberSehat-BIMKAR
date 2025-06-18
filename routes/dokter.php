<?php

use App\Http\Controllers\Dokter\ObatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dokter\JadwalPeriksaController;
use App\Http\Controllers\Dokter\MemeriksaController;

Route::middleware(['auth', 'role:dokter'])->prefix('dokter')->group(function () {
    Route::get('/dashboard', function () {
        return view('dokter.dashboard');
    })->name('dokter.dashboard');
    
    Route::prefix('obat')->group(function () {
        Route::get('/', [ObatController::class, 'index'])->name('dokter.obat.index');
        Route::get('/create', [ObatController::class, 'create'])->name('dokter.obat.create');
        Route::post('/', [ObatController::class, 'store'])->name('dokter.obat.store');
        Route::get('/{id}/edit', [ObatController::class, 'edit'])->name('dokter.obat.edit');
        Route::patch('/{id}', [ObatController::class, 'update'])->name('dokter.obat.update');
        Route::delete('/{id}', [ObatController::class, 'destroy'])->name('dokter.obat.destroy');

        Route::get('/restore', [ObatController::class, 'recycle'])->name('dokter.obat.recycle');  //
        Route::get('/restore/{id}', [ObatController::class, 'restore'])->name('dokter.obat.restore'); //
    });
    
    Route::prefix('jadwal-periksa')->group(function () {
        Route::get('/', [JadwalPeriksaController::class, 'index'])->name('dokter.JadwalPeriksa.index');
        Route::get('/create', [JadwalPeriksaController::class, 'create'])->name('dokter.JadwalPeriksa.create');
        Route::post('/', [JadwalPeriksaController::class, 'store'])->name('dokter.JadwalPeriksa.store');
        Route::get('/{id}/edit', [JadwalPeriksaController::class, 'edit'])->name('dokter.JadwalPeriksa.edit');
        Route::put('/{id}', [JadwalPeriksaController::class, 'update'])->name('dokter.JadwalPeriksa.update');
        Route::delete('/{id}', [JadwalPeriksaController::class, 'delete'])->name('dokter.JadwalPeriksa.delete');
        Route::patch('/{id}/toggle-status', [JadwalPeriksaController::class, 'toggleStatus'])->name('dokter.JadwalPeriksa.toggleStatus');

    });
    Route::prefix('memeriksa')->group(function () {
        Route::get('/', [MemeriksaController::class, 'index'])->name('dokter.memeriksa.index');
        Route::delete('/{id}', [MemeriksaController::class, 'destroy'])->name('dokter.memeriksa.destroy');
        Route::get('/{id}/create', [MemeriksaController::class, 'create'])->name('dokter.memeriksa.create');
        Route::post('/{janjiPeriksaId}', [MemeriksaController::class, 'store'])->name('dokter.memeriksa.store');


    });
});