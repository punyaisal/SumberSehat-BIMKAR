<?php

use App\Http\Controllers\Pasien\JanjiPeriksaController;
use App\Http\Controllers\pasien\RiwayatPeriksaController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:pasien'])->prefix('pasien')->group(function () {
    Route::get('/dashboard', function () {
        return view('pasien.dashboard');
    })->name('pasien.dashboard');
    
    Route::prefix('janji-periksa')->group(callback:function(){
        Route::get('/',[JanjiPeriksaController::class,'index'])->name(name:'pasien.janji-periksa.index');
        Route::post('/',[JanjiPeriksaController::class,'store'])->name(name:'pasien.janji-periksa.store');
}); 
Route::prefix('riwayat-periksa')->group(function(){
        Route::get('/', [RiwayatPeriksaController::class, 'index'])->name('pasien.riwayat-periksa.index');
        Route::get('/{id}/detail', [RiwayatPeriksaController::class, 'detail'])->name('pasien.riwayat-periksa.detail');
        Route::get('/{id}/riwayat', [RiwayatPeriksaController::class, 'riwayat'])->name('pasien.riwayat-periksa.riwayat');
    });


});