<?php

use App\Http\Controllers\ReskiUtama\JadwalController;
use App\Http\Controllers\ReskiUtama\MatakuliahController;
use Illuminate\Support\Facades\Route;

/*
    |--------------------------------------------------------------------------
    | ReskiUtama Routes
    |--------------------------------------------------------------------------
    |
    | Custom routes yang dibuat untuk prefix galeh-ludi
    |
 */

Route::prefix('reski')->group(function () {
    Route::get('matakuliah', [MatakuliahController::class, 'index'])->name('reski.matakuliah');
    Route::get('jadwal', [JadwalController::class, 'index'])->name('reski.jadwal');
    Route::get('routes', fn () => view('reski.routes'));
});
