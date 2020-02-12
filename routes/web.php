<?php

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

Route::get('', function () {
    return view('');
});

Route::get('/view','HomeController@index');
Route::get('/home','HomeController@index2');
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/loginpost','AuthController@loginpost');
Route::get('/logout', 'AuthController@logout');
Route::get('/register', 'AuthController@register');
Route::post('/registerpost','AuthController@registerpost');
Route::get('/paket-internasional','HomeController@inter');
Route::get('/jogja','HomeController@jogja');
Route::get('/paket-domestik','HomeController@lokal');
