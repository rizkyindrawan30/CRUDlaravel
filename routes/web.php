<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\DatabukuController;
use App\Http\Controllers\Pinjambuku;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PeminjamanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/dasboard', [DatabukuController::class, 'index'])->name('dasboard')->middleware(['auth:sanctum', 'verified']);

Route::resource('databuku', BukuController::class);

Route::resource('anggotaperpus', AnggotaController::class);

Route::resource('peminjamanbuku', PeminjamanController::class);

Route::get('/pinjam', [Pinjambuku::class, 'index'])->name('pinjam')->middleware(['auth:sanctum', 'verified']);

Route::get('/kelasX', [KelasController::class, 'kelasx'])->name('kelasX')->middleware(['auth:sanctum', 'verified']);

Route::get('/kelasXI', [KelasController::class, 'kelasxi'])->name('kelasXI')->middleware(['auth:sanctum', 'verified']);

Route::get('/kelasXII', [KelasController::class, 'kelasxii'])->name('kelasXII')->middleware(['auth:sanctum', 'verified']);
