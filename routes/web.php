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

Route::get('/', 'BarangController@index')->name('welcome');
Route::get('/barang/{id}', 'BarangController@show')->name('barang.show');
Route::get('/pesanan/{id}', 'PesananController@create')->name('pesanan.create');
Route::post('/pesanan/{id}', 'PesananController@store')->name('pesanan.store');

Auth::routes();

Route::middleware('IsAdmin')->group(function () {
    Route::get('/admin', 'AdminController@index')->name('admin');
    Route::get('/admin/user', 'Admin\UserController@index')->name('user');
    Route::resource('/admin/barang', 'Admin\BarangController');
    Route::resource('/admin/kategori', 'Admin\KategoriController');
});

// Route Pesanan
Route::get('/admin/pesanan', 'Admin\PesananController@index')->name('admin.pesanan');
