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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/setting', function () {
    return view('/page/setting');
});

Route::get('/aboutus', function () {
    return view('/page/aboutus');
});

Route::get('/maps', function () {
    return view('/page/maps');
});

