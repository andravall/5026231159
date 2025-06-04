<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\Pegawai2Controller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiController;

// Route bawaan default laravel
Route::get('/', function () {
    return view('welcome');
});

// Route frontend
Route::view('/frontend', 'frontend');

// Route github 5026231159
Route::view('/pertemuan3', 'pertemuan3');
Route::view('/pertemuan4', 'pertemuan4');
Route::view('/template1', 'template1');
Route::view('/tugaslinktree', 'tugaslinktree');
Route::view('/pertemuan7-js1', 'pertemuan7-js1');
Route::view('/pertemuan7-js2', 'pertemuan7-js2');
Route::view('/ets', 'ets');

// Route pegawai
//Route::get('/pegawai/{nama}', [Pegawai2Controller::class, 'index']);

// Route dosen
Route::get('dosen', [Link::class, 'index']);

// Route formulir
Route::get('/formulir', [Pegawai2Controller::class, 'formulir']);
Route::post('/formulir/proses', [Pegawai2Controller::class, 'proses']);

// Route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//Route CRUD Pegawai
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiController::class,'tambah']);
Route::post('/pegawai/store', [PegawaiController::class,'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class,'edit']);
Route::post('/pegawai/update', [PegawaiController::class,'update']);
Route::post('/pegawai/hapus/{id}', [PegawaiController::class,'hapus']);
Route::get('/pegawai/cari', [PegawaiController::class, 'cari']);
