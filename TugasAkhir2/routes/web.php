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
    return view('welcome');
});

Route::get('/', function () {
    return view('layout.master');
});
Route::prefix('admin')->group(function(){
    Route::resource('produk', 'ProdukController');
    Route::resource('gallery','GalleryController');
});

Route::get('/produk','Tampil_produkController@index')->name('produk');
Route::get('/gallery','Tampil_galleryController@index')->name('gallery');
Route::get('/detail/{id}','DetailController@index')->name('detail');
