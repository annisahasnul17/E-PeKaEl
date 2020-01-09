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
Route::get('upload','ImageController@index');
Route::post('upload','ImageController@upload');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/aboutus', function () {
    return view('/page/aboutus');
});

Route::get('/mapss', function () {
    return view('/page/mapss');
});

Route::get('/tandai', function () {
    return view('/page/tandai');
});

Route::get('/upload', function () {
    return view('/page/upload');
});

Route::get('/bisnis', function () {
    return view('/page/bisnis');
});

Route::get('/nearby', function () {
    return view('/page/nearby');
});Auth::routes();

Route::get('/history','ImgController@index');

Route::get('/makanan', function () {
    return view('/page/makanan');
});Auth::routes();

Route::get('/minuman', function () {
    return view('/page/minuman');
});Auth::routes();

Route::get('/aksesoris', function () {
    return view('/page/aksesoris');
});Auth::routes();

Route::get('/buah', function () {
    return view('/page/buah');
});Auth::routes();

Route::get('/pakaian', function () {
    return view('/page/pakaian');
});Auth::routes();

Route::get('/mainan', function () {
    return view('/page/mainan');
});Auth::routes();

Route::get('/peralatandapur', function () {
    return view('/page/peralatandapur');
});Auth::routes();

Route::get('/pulsa', function () {
    return view('/page/pulsa');
});Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});