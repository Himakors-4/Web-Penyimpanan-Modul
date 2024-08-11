<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('home.index');
});

// Menampilkan Modul
Route::get('/list', [FileController::class, 'show_file'])->name('list');


// route add_modul
Route::get('/add', function () {
    return view('moduls.add');
})->name('add');

// Menambahkan Modul
Route::post('/add_modul', [FileController::class, 'store_file'])->name('add_modul');

// Memperbaharui Modul
Route::put('/update_modul/{modul}', [FileController::class, 'update_file'])->name('modul.update');

// Menghapus Modul
Route::delete('/delete_modul/{modul}', [FileController::class, 'delete_file'])->name('modul.delete');

// Download Modul
Route::get('/download_modul/{modul}', [FileController::class, 'download'])->name('modul.download');

// Update Modul
Route::get('/edit_modul/{modul}', [FileController::class, 'edit'])->name('modul.edit');

Route::get('/signin', function () {
    return view('login.signin');
});

Route::post('/signin', [AuthController::class, 'signin'])->name('login')->middleware('guest');

Route::get('/signup', function () {
    return view('login.signup');
});

Route::post('/signup', [AuthController::class, 'signup'])->middleware('guest');

Route::post('/logout', [AuthController::class, 'logout']);
