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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::resource('/admin/barang', 'Admin\BarangController');
Route::resource('/admin/kategori', 'Admin\KategoriController');
