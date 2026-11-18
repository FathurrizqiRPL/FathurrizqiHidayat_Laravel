<?php
use App\http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk menampilkan data siswa
Route::get('/siswa', [SiswaController::class, 'index']);

