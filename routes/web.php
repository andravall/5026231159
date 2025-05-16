<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/pertemuan3', 'pertemuan3');
Route::view('/pertemuan4', 'pertemuan4');
Route::view('/tugaslinktree', 'tugaslinktree');
Route::view('/pertemuan7-js1', 'pertemuan7-js1');
Route::view('/pertemuan7-js2', 'pertemuan7-js2');
Route::view('/ets', 'ets');
