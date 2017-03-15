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

//FR Routes
Route::group(['prefix' => 'fr'], function() {
	Route::get('contact', 'ContactController@index');

	Route::get('/', function () {
		return view('welcome');
	});

	Route::get('/coucou', function(){
		return 'yo';
	});
});


// EN routes
Route::group(['prefix' => 'en'], function() {

	Route::get('/', function () {
		return view('welcome');
	});

	Route::get('/coucou', function(){
		return 'yo';
	});
});

Auth::routes();


