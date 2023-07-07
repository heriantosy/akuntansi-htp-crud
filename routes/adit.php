<?php

use App\Http\Controllers\adit\JadwalController;
use App\Http\Controllers\adit\MatakuliahController;
use Illuminate\Support\Facades\Route;

/*
    |--------------------------------------------------------------------------
    | adit Routes
    |--------------------------------------------------------------------------
    |
    | Custom routes yang dibuat untuk prefix adit
    |
 */

Route::prefix('adit')->group(function () {
    Route::get('matakuliah', [MatakuliahController::class, 'index'])->name('adit.matakuliah');
    Route::get('jadwal', [JadwalController::class, 'index'])->name('adit.jadwal');
    Route::get('routes', fn () => view('adit.routes'));
});