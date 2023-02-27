<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/siswa', App\Http\Controllers\SiswaController::class);

// Route::get('/siswa', [App\Http\Controllers\SiswaController::class, 'index'])->name('siswa');
// Route::get('/siswa_create', [App\Http\Controllers\SiswaController::class, 'create'])->name('siswa_create');
// Route::get('/siswa_store', [App\Http\Controllers\SiswaController::class, 'store'])->name('siswa_store');
