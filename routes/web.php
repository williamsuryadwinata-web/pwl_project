<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

// Tambahkan baris untuk sesuai tugas:
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/mahasiswa-create', [MahasiswaController::class, 'create']);
Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.save');


Route::delete('/mahasiswa/{id})',[MahasiswaController::class, 'destroy'])->name('mahasiswa.save');