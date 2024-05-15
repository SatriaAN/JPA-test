<?php

use App\Http\Controllers\penyimpananController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [penyimpananController::class, 'index'])->name('penyimpanan.index');
Route::get('/tambah', [penyimpananController::class, 'create'])->name('penyimpanan.create');
Route::post('/tambah', [penyimpananController::class, 'store'])->name('penyimpanan.store');
Route::get('/ubah/{id}', [penyimpananController::class, 'show'])->name('penyimpanan.show');
Route::put('/ubah/{id}', [penyimpananController::class, 'update'])->name('penyimpanan.update');
Route::delete('/hapus/{id}', [penyimpananController::class, 'destroy'])->name('penyimpanan.delete');