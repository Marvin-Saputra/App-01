<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::resource('users', \App\Http\Controllers\PenggunaController::class)->middleware('auth');

//  Route::resource('pelanggan',\App\Http\Controllers\PelangganController::class)->middleware('auth');

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::resource('dokter', \App\Http\Controllers\DokterController::class)
 ->middleware('auth');

 Route::resource('obat', \App\Http\Controllers\ObatController::class)
 ->middleware('auth');
//  Route::resource('pasien', \App\Http\Controllers\PasienController::class)
//  ->middleware('auth');