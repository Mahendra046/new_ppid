<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Depan\HomeController;
use App\Http\Controllers\Depan\KontakController;
use App\Http\Controllers\Depan\KontenController;
use App\Http\Controllers\Depan\MenuController;
use App\Http\Controllers\Depan\PermohonanInformasiController;
use App\Models\PermohonanInformasi;
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

// Login
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

// Admin
Route::prefix('admin')
->middleware('auth:user')
->group(function () {
    // dashboard
    Route::get('dashboard', [DashboardController::class, 'index']);
   
    include '_/Admin.php';
});

Route::get('/', [HomeController::class, 'index']);
Route::get('beranda', [HomeController::class, 'index']);
Route::get('kontak', [KontakController::class, 'kontak']);
Route::get('menu/{menu}', [MenuController::class, 'menu']);
Route::get('menu/{menu}/{submenu}', [MenuController::class, 'submenu']);
Route::get('konten/teks/{konten}', [KontenController::class, 'teks']);
Route::get('konten/image/{konten}', [KontenController::class, 'image']);
Route::get('konten/pdf/{konten}', [KontenController::class, 'pdf']);
Route::post('permohonan',[PermohonanInformasiController::class, 'store'])->name('permohonan.store');