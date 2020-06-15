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

Route::resource('home', 'HomeController');

Route::get('/home-view', function(){
    return view('user.home');
});

Route::resource('client', 'ClientController');

Route::get('/client-view', function(){
    return view('user.client');
});