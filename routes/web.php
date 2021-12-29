<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KirimEmailController;
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
    return view('/index');
});

Route::get('admin-loginin', [App\Http\Controllers\AuthController::class, 'index']);
Route::post('login-post', [App\Http\Controllers\AuthController::class, 'loginPost']);
Route::get('logout', [App\Http\Controllers\AuthController::class, 'logout']);
Route::get('dashboard-admin', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard-admin');
Route::get('users', [App\Http\Controllers\Admin\UsersController::class, 'index'])->name('users');
Route::post('tambah-user', [App\Http\Controllers\Admin\UsersController::class, 'tambah']);

Route::get('data_pesan', [App\Http\Controllers\Admin\PesanController::class, 'index'])->name('data_pesan');
Route::post('ubah-status/{id}', [App\Http\Controllers\Admin\PesanController::class, 'ubahStatus']);

Route::get('data_kategori', [App\Http\Controllers\Admin\KategoriController::class, 'index']);
Route::post('tambah-kategori', [App\Http\Controllers\Admin\KategoriController::class, 'tambah']);

Route::post('kirim-email', [App\Http\Controllers\KirimEmailController::class, 'kirim']);