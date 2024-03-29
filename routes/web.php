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

// Route::view('/dashboard', 'admin.index');


Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();


Route::group(['middleware' => ['auth','checkRole:admin']], function(){
	Route::get('/admin','AdminController@index');
});

Route::group(['middleware' => ['auth', 'checkRole:admin,user']], function(){
	Route::get('/user','UserController@index');
});



