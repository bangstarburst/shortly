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

Route::get('','IndexController@index');


Route::get('get_ajax','IndexController@get_ajax');





//admin space
Route::prefix('administrator')->group(function () {
	Route::namespace('Administrator')->group(function () {

		Route::get('/','IndexController@index');

	});
});
