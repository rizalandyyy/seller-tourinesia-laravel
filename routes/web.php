<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SetupPasswordController;
use App\Http\Controllers\DashboardController;

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




//Protected Route
Route::get('/', [DashboardController::class, 'index'])->name('/')->middleware('auth');

//Public Route
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/forgot', [ForgotPasswordController::class, 'index'])->name('forgot');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/setup_password', [SetupPasswordController::class, 'index'])->name('setup_password');


Route::get('/editprofil', function () {
    return view('editprofil');
});
Route::get('/gift', function () {
    return view('gift');
});
Route::get('/performa', function () {
    return view('performa');
});
Route::get('/pesanan', function () {
    return view('pesanan');
});
Route::get('/produk', function () {
    return view('produk');
});
Route::get('/profiltoko', function () {
    return view('profiltoko');
});
Route::get('/tambahproduk', function () {
    return view('tambahproduk');
});