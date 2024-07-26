<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BlogController;
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


Auth::routes();

/* Home Route */
Route::get('/', [App\Http\Controllers\HomeController::class, 'client'])->name('main');
Route::get('/client/umkm', [App\Http\Controllers\HomeController::class, 'umkm'])->name('umkm');
Route::get('/client/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');

/* Auth Route */
Route::get('login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::get('register', [App\Http\Controllers\AuthController::class, 'register'])->name('register');

/* Dashboard Route */
Route::get('admin', [App\Http\Controllers\Administrator\DashboardController::class, 'index'])->name('dashboard');
Route::get('tabel', [App\Http\Controllers\Administrator\DashboardController::class, 'table'])->name('check');

//Blog Route
Route::get('bloginput', [App\Http\Controllers\BlogController::class, 'bloginput'])->name('BlogInput');
Route::resource('blog', App\Http\Controllers\BlogController::class);

//Umkm Route
Route::get('umkminput', [App\Http\Controllers\UmkmController::class, 'umkminput'])->name('UmkmInput');
Route::resource('umkm', App\Http\Controllers\UmkmController::class);

Route::get('surat', [App\Http\Controllers\SuratController::class, 'index'])->name('Surat');



