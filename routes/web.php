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
    return view('login');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/forgotpassword', function () {
    return view('forgotpassword');
});
Route::get('/setuppassword', function () {
    return view('setuppassword');
});
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