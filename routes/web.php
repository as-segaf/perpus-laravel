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

Route::group(['middleware' => 'auth'], function(){
	Route::get('/', function(){
		if (Auth::user()->role == 'admin') {
			return view('adminHome');
		} else{
			return view('userHome');
		}
	});

	Route::get('/admin', function(){
		return view('home');
	})->middleware('auth', 'admin');
});



