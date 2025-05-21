<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;

// Route bawaan default laravel
Route::get('/', function () {
    return view('welcome');
});

// Route github 5026231159
Route::view('/pertemuan3', 'pertemuan3');
Route::view('/pertemuan4', 'pertemuan4');
Route::view('/tugaslinktree', 'tugaslinktree');
Route::view('/pertemuan7-js1', 'pertemuan7-js1');
Route::view('/pertemuan7-js2', 'pertemuan7-js2');
Route::view('/ets', 'ets');

// Route dosen
Route::get('dosen', [Link::class, 'index']);

// Route pegawai
Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

// Route formulir
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

// Route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);
