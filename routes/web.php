<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;

Route::get('/', function () {
    return view('home');
});

// Route::group(['middleware' => ['auth']], function () {
// });
Route::get('/show_modul', [FileController::class, 'show_file'])->name('modul.index');
Route::post('/add_modul', [FileController::class, 'store_file'])->name('modul.store');
Route::put('/update_modul/{modul}', [FileController::class, 'update_file'])->name('modul.update');
Route::delete('/delete_modul/{modul}', [FileController::class, 'delete_file'])->name('modul.delete');
// Route::get('/download_modul/{modul}', [FileController::class, 'download'])->name('modul.download');
// Route::get('/edit_modul/{modul}', [FileController::class, 'edit'])->name('modul.edit');