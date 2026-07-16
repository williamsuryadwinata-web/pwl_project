<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\KrsController;
use App\Http\Controllers\KrsDetailController;

/*
|--------------------------------------------------------------------------
| HOME
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| AUTHENTICATION
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'loginView'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'registerView'])->name('register.view');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| DASHBOARD
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:admin'])->group(function () {

    // =======================
    // MAHASISWA
    // =======================
    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
    Route::get('/mahasiswa-create', [MahasiswaController::class, 'create'])->name('mahasiswa.add');
    Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.save');
    Route::get('/mahasiswa/{id}', [MahasiswaController::class, 'show']);
    Route::get('/mahasiswa-edit/{id}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit.form');
    Route::put('/mahasiswa/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.edit');
    Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.delete');

    // =======================
    // DOSEN
    // =======================
    Route::get('/dosen', [DosenController::class, 'index'])->name('dosen.index');
    Route::get('/dosen-create', [DosenController::class, 'create'])->name('dosen.add');
    Route::post('/dosen', [DosenController::class, 'store'])->name('dosen.save');
    Route::get('/dosen/{id}', [DosenController::class, 'show']);
    Route::get('/dosen-edit/{id}', [DosenController::class, 'edit'])->name('dosen.edit.form');
    Route::put('/dosen/{id}', [DosenController::class, 'update'])->name('dosen.edit');
    Route::delete('/dosen/{id}', [DosenController::class, 'destroy'])->name('dosen.delete');

    // =======================
    // JURUSAN
    // =======================
    Route::get('/jurusan', [JurusanController::class, 'index'])->name('jurusan.index');
    Route::get('/jurusan-create', [JurusanController::class, 'create'])->name('jurusan.add');
    Route::post('/jurusan', [JurusanController::class, 'store'])->name('jurusan.save');
    Route::get('/jurusan/{id}', [JurusanController::class, 'show']);
    Route::get('/jurusan-edit/{id}', [JurusanController::class, 'edit'])->name('jurusan.edit.form');
    Route::put('/jurusan/{id}', [JurusanController::class, 'update'])->name('jurusan.edit');
    Route::delete('/jurusan/{id}', [JurusanController::class, 'destroy'])->name('jurusan.delete');

    // =======================
    // MATA KULIAH
    // =======================
    Route::get('/matakuliah', [MatakuliahController::class, 'index'])->name('matakuliah.index');
    Route::get('/matakuliah-create', [MatakuliahController::class, 'create'])->name('matakuliah.add');
    Route::post('/matakuliah', [MatakuliahController::class, 'store'])->name('matakuliah.save');
    Route::get('/matakuliah/{id}', [MatakuliahController::class, 'show']);
    Route::get('/matakuliah-edit/{id}', [MatakuliahController::class, 'edit'])->name('matakuliah.edit.form');
    Route::put('/matakuliah/{id}', [MatakuliahController::class, 'update'])->name('matakuliah.edit');
    Route::delete('/matakuliah/{id}', [MatakuliahController::class, 'destroy'])->name('matakuliah.delete');

    // =======================
    // KELAS
    // =======================
    Route::get('/kelas', [KelasController::class, 'index'])->name('kelas.index');
    Route::get('/kelas/create', [KelasController::class, 'create'])->name('kelas.add');
    Route::post('/kelas/store', [KelasController::class, 'store'])->name('kelas.save');
    Route::delete('/kelas/{id}', [KelasController::class, 'destroy'])->name('kelas.delete');

    // =======================
    // KRS
    // =======================
    Route::get('/krs', [KrsController::class, 'index'])->name('krs.index');
    Route::get('/krs-edit/{id}', [KrsController::class, 'edit'])->name('krs.edit.form');
    Route::put('/krs/{id}', [KrsController::class, 'update'])->name('krs.edit');
    Route::delete('/krs/{id}', [KrsController::class, 'destroy'])->name('krs.delete');

    // =======================
    // KRS DETAIL
    // =======================
    Route::get('/krs-detail', [KrsDetailController::class, 'index'])->name('krsdetail.index');
    Route::delete('/krs-detail/{id}', [KrsDetailController::class, 'destroy'])->name('krsdetail.delete');

});

/*
|--------------------------------------------------------------------------
| GENERAL AUTHENTICATED ROUTES (ACCESSIBLE BY ADMIN, MAHASISWA, DOSEN)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    // KRS ADMIN + MAHASISWA
    Route::get('/krs-create', [KrsController::class, 'create'])
        ->name('krs.add');

    Route::post('/krs-store', [KrsController::class, 'store'])
        ->name('krs.store');

    // KRS DETAIL ADMIN + MAHASISWA
    Route::get('/krs-detail-create', [KrsDetailController::class, 'create'])
        ->name('krsdetail.add');

    Route::post('/krs-detail-store', [KrsDetailController::class, 'store'])
        ->name('krsdetail.save');

});

/*
|--------------------------------------------------------------------------
| MAHASISWA
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:mahasiswa'])->group(function () {

    // Daftar KRS (Menggunakan mahasiswaIndex)
    Route::get('/krs-mahasiswa', [KrsController::class, 'mahasiswaIndex'])->name('krs.mahasiswa');

    // Pendaftaran KRS
    Route::get('/krs-mahasiswa/create', [KrsController::class, 'mahasiswaCreate'])->name('krs.mahasiswa.create');
    Route::post('/krs-mahasiswa/store', [KrsController::class, 'mahasiswaStore'])->name('krs.mahasiswa.store');

    // Detail KRS
    Route::get('/krs-detail-mahasiswa', [KrsDetailController::class, 'index'])->name('krsdetail.mahasiswa');

});

/*
|--------------------------------------------------------------------------
| DOSEN
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:dosen'])->group(function () {

    Route::get('/dosen/mahasiswa', [MahasiswaController::class, 'index'])->name('dosen.mahasiswa');

    Route::get('/dosen/data-dosen', [DosenController::class, 'index'])->name('dosen.dosen');

    Route::get('/dosen/jurusan', [JurusanController::class, 'index'])->name('dosen.jurusan');

    Route::get('/dosen/matakuliah', [MatakuliahController::class, 'index'])->name('dosen.matakuliah');

    Route::get('/dosen/kelas', [KelasController::class, 'index'])->name('dosen.kelas');

    Route::get('/dosen/krs', [KrsController::class, 'index'])->name('dosen.krs');

    Route::get('/dosen/krs-detail', [KrsDetailController::class, 'index'])->name('dosen.krsdetail');

    Route::get('/approval-krs', [KrsController::class, 'approval'])->name('approval.index');

    Route::put('/approval-krs/{id}/approve', [KrsController::class, 'approve'])->name('approval.approve');

    Route::put('/approval-krs/{id}/reject', [KrsController::class, 'reject'])->name('approval.reject');

});