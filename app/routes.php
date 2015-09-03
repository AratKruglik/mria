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

//LOGIN
Route::controller('users', 'UserController');

Route::controller('password', 'RemindersController');

Route::get('login', function() {
	return Redirect::to('users/login');
});

Route::get('logout', 'UserController@getLogout');
//end

//Dashboard
Route::group(['prefix' => 'dashboard', 'before' => 'auth'], function(){
	
	if(Auth::check()) {
        //Проверяем является ли юзер админом
        if(Auth::User()->isAdmin != 1) {
            return Redirect::to('/dashboard');
        }
    } else {
        return Redirect::guest('login');
    }

    Route::get('/', function() {
    	return Redirect::to('dashboard/objects');
    });

    //objects
    Route::get('objects', 'DashboardController@objects');
    

    // articles
    Route::get('articles', 'DashboardController@articles');
    Route::get('articles/add', function(){
        return View::make('admin.article');
    });
    Route::get('articles/edit/{id}', function($id) {
        $item = Article::findOrFail($id);
        return View::make('admin.article',['item' => $item]);
    });
    Route::post('articles/add', 'DashboardController@articleAdd');
    Route::post('articles/edit/{id}', 'DashboardController@articleEdit');
    Route::post('articles/drop/{id}', 'DashboardController@articleDrop');



});
//end

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