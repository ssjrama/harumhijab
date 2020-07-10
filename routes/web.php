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
Route::get('/riwayat', 'PesananController@history')->name('history');
Route::get('/barang/{id}', 'BarangController@show')->name('barang.show');
Route::get('/pesanan/{id}', 'PesananController@create')->name('pesanan.create');
Route::post('/pesanan/{id}', 'PesananController@store')->name('pesanan.store');
Route::get('/bayar/{id}', 'PesananController@create_bayar')->name('pesanan.bayar');
Route::post('/bayar/{id}', 'PesananController@bayar')->name('pesanan.bukti_bayar');
Route::delete('/bayar/{id}', 'PesananController@delete')->name('pesanan.delete');

Auth::routes();

Route::middleware('is_admin')->group(function () {
    Route::get('/admin', 'AdminController@index')->name('admin');
    Route::get('/admin/user', 'Admin\UserController@index')->name('user');
    Route::resource('/admin/barang', 'Admin\BarangController');
    Route::resource('/admin/kategori', 'Admin\KategoriController');

    // Route Pesanan
    Route::get('/admin/pesanan', 'Admin\PesananController@index')->name('admin.pesanan');
    Route::get('/admin/detail/{id}', 'Admin\PesananController@show')->name('admin.pesanan.show');
    Route::post('/pesanan/status/{id}', 'Admin\PesananController@update_status')->name('pesanan.status');

});