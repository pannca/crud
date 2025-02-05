<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\RayonController;
use App\Models\Rayon;

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

Route::prefix('rayon')->name('rayon.')->group(function () {
    Route::get('/index' , [RayonController::class, 'index'])->name('index');
    Route::get('/create' , [RayonController::class, 'create'])->name('create');
    Route::post('/store' , [RayonController::class, 'store'])->name('store');
    Route::get('/{id}', [RayonController::class, 'edit'])->name('edit');
    Route::patch('/{id}' , [RayonController::class, 'editProsess'])->name('editProsess');
    Route::delete('/hapus/{id}' , [RayonController::class, 'hapus'])->name('hapus');

});
