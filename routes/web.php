<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('utama');
});

Route::prefix('siswa')->name('siswa.')->group(function () {
   Route::get('/create' , [SiswaController::class, 'create'])->name('create');
   Route::post('/store' , [SiswaController::class, 'store'])->name('store');
   Route::get('/index' , [SiswaController::class, 'index'])->name('index');
   Route::get('/{id}', [SiswaController::class, 'edit'])->name('edit');
   Route::patch('/{id}' , [SiswaController::class, 'editProsess'])->name('editProsess');
   Route::delete('/hapus/{id}' , [SiswaController::class, 'hapus'])->name('hapus');
});
