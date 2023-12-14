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
Route::get('/golongan', [App\Http\Controllers\GolonganController::class, 'index']);
Route::get('/golongan/create', [App\Http\Controllers\GolonganController::class, 'create']);
Route::post('/golongan', [App\Http\Controllers\GolonganController::class, 'store']);
Route::get('/golongan/edit/{id}', [App\Http\Controllers\GolonganController::class, 'edit']);
Route::patch('/golongan/{id}', [App\Http\Controllers\GolonganController::class, 'update']);
Route::delete('/golongan/{id}', [App\Http\Controllers\GolonganController::class, 'destroy']);

Route::get('/users', [App\Http\Controllers\UsersController::class, 'index']);
Route::get('/users/create', [App\Http\Controllers\UsersController::class, 'create']);
Route::post('/users', [App\Http\Controllers\UsersController::class, 'store']);
Route::get('/users/edit/{id}', [App\Http\Controllers\usersController::class, 'edit']);
Route::patch('/users/{id}', [App\Http\Controllers\UsersController::class, 'update']);
Route::delete('/users/{id}', [App\Http\Controllers\UsersController::class, 'destroy']);

//route pelanggan//
Route::get('/pelanggan', [App\Http\Controllers\PelangganController::class, 'index'])->name('pelanggan');
Route::get('/pelanggan/create', [App\Http\Controllers\PelangganController::class, 'create'])->name('pel_create');
Route::post('pelanggan/store', [App\Http\Controllers\PelangganController::class, 'store'])->name('pel_store');
Route::get('/pelanggan/edit/{id}', [App\Http\Controllers\PelangganController::class, 'edit'])->name('pel_edit');
Route::put('/pelanggan/update/{id}', [App\Http\Controllers\PelangganController::class, 'update'])->name('pel_update');
Route::delete('/pelanggan/delete/{id}', [App\Http\Controllers\PelangganController::class, 'destroy'])->name('pel_delete');
