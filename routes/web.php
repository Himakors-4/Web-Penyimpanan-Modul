<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;

Route::get('/', function () {
    return view('home');
});

// Menampilkan Modul
Route::get('/show_modul', [FileController::class, 'show_file'])->name('home');

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