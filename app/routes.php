<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function(){
	return Redirect::to('/index');
});

Route::get('/index', 'PageController@index');
Route::get('/catalog', 'CatalogController@index');

Route::get('/catalog/item/{id}', 'CatalogController@show');