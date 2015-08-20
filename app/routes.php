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
App::before(function($request) {
	View::share('configs', DB::table('configs')->get());
});

App::before(function($request) {
	View::share('footerArticles', DB::table('articles')->take(5)->get());
});


Route::pattern('id', '[0-9]+');
Route::pattern('slug', '[a-z]+');

Route::get('/', function(){
	return Redirect::to('/index');
});

Route::get('/index', 'PageController@index');
Route::get('/catalog', 'CatalogController@index');
Route::get('/contacts', function() {
	return View::make('pages.contacts');
});
Route::get('/news', 'PageController@showNews');
Route::get('/news/view/{id}', 'PageController@showNew');

Route::get('/catalog/{slug}', 'CatalogController@show');