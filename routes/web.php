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
Route::get('/users', [App\Http\Controllers\UsersController::class, 'index']);
Route::get('/users/create', [App\Http\Controllers\UsersController::class, 'create']);
Route::post('/users', [App\Http\Controllers\UsersController::class, 'store']);
Route::get('/users/{id}/edit', [App\Http\Controllers\UsersController::class, 'edit']);
Route::patch('/users/{id}', [App\Http\Controllers\UsersController::class, 'update']);
Route::delete('/users/{id}', [App\Http\Controllers\UsersController::class, 'destroy']);

Route::get('/siswa', [App\Http\Controllers\SiswaController::class, 'index']);
Route::get('/siswa/create', [App\Http\Controllers\SiswaController::class, 'create']);
Route::post('/siswa', [App\Http\Controllers\SiswaController::class, 'store']);
Route::get('/siswa/{id}/edit', [App\Http\Controllers\SiswaController::class, 'edit']);
Route::patch('/siswa/{id}', [App\Http\Controllers\SiswaController::class, 'update']);
Route::delete('/siswa/{id}', [App\Http\Controllers\SiswaController::class, 'destroy']);

Route::get('/tabungan', [App\Http\Controllers\TabunganController::class, 'index']);
Route::get('/tabungan/create', [App\Http\Controllers\TabunganController::class, 'create']);
Route::post('/tabungan', [App\Http\Controllers\TabunganController::class, 'store']);
Route::get('/tabungan/{id}/edit', [App\Http\Controllers\TabunganController::class, 'edit']);
Route::patch('/tabungan/{id}', [App\Http\Controllers\TabunganController::class, 'update']);
Route::delete('/tabungan/{id}', [App\Http\Controllers\TabunganController::class, 'destroy']);