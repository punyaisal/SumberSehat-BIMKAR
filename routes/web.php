<?php

use App\Http\Controllers\Pasien\JanjiPeriksaController;
use App\Http\Controllers\ProfileController;
use App\Models\JanjiPeriksa;
use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\callback;

Route::get('/', function () {
    return view('welcome');
});

require __DIR__ .'/auth.php';
require __DIR__.'/auth.php';
require __DIR__.'/pasien.php';
require __DIR__.'/dokter.php';



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', function () {
    return view('welcome');
});

