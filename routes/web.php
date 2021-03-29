<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\DatabukuController;
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