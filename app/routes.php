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
	View::share('configs', DB::table('confs')->get());
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

    //pages
    Route::get('pages', 'DashboardController@pages');
    Route::get('pages/add', function(){
        return View::make('admin.page');
    });
    Route::get('pages/edit/{id}', function($id) {
        $item = Page::findOrFail($id);
        return View::make('admin.page', ['item' => $item]);
    });

    Route::post('pages/add', 'DashboardController@pageAdd');
    Route::post('pages/edit/{id}', 'DashboardController@pageEdit');
    Route::get('pages/drop/{id}', 'DashboardController@pageDrop');
    //end

    //menu
    Route::get('menu', 'DashboardController@menu');
    Route::get('menu/add', function(){
        $pages = Page::all();

        $ordered = DB::table('menus')->max('ordered');
        $ordered = $ordered + 1;

        return View::make('admin.menu', ['pages' => $pages, 'ordered' => $ordered]);
    });
    Route::get('menu/edit/{id}', function($id) {
        $item = Menu::findOrFail($id);
        $pages = Page::all();
        return View::make('admin.menu',['item' => $item, 'pages' => $pages]);
    });

    Route::post('menu/add', 'DashboardController@menuAdd');
    Route::post('menu/edit/{id}', 'DashboardController@menuEdit');
    Route::get('menu/drop/{id}', 'DashboardController@menuDrop');
    //end

    //objects
    Route::get('objects', 'DashboardController@objects');
    Route::get('objects/add', function(){
    	$types = Type::all();
        $agents = Agent::all();
        return View::make('admin.object', ['types' => $types, 'agents' => $agents]);
    });
    Route::get('objects/edit/{id}', function($id) {
        $item = Object::findOrFail($id);
        $types = Type::all();
        $agents = Agent::all();
        return View::make('admin.object',['item' => $item, 'types' => $types, 'agents' => $agents]);
    });

    Route::post('objects/add', 'DashboardController@objectAdd');
    Route::post('objects/edit/{id}', 'DashboardController@objectEdit');
    Route::get('objects/drop/{id}', 'DashboardController@objectDrop');
    //end

    //gallery
    Route::get('gallery', 'DashboardController@gallery');
    Route::get('gallery/edit/{id}', function($id) {
        $item = Object::findOrFail($id);
        $photos = Photo::where('object_id', $id);
        return View::make('admin.gallery_id',['photos' => $photos, 'item' => $item]);
    });

    Route::post('gallery/edit/{id}', 'DashboardController@galleryPhotoUpload');
    Route::get('gallery/drop/{id}', 'DashboardController@galleryDrop');
    //end

    //agents
    Route::get('agents', 'DashboardController@agents');
    Route::get('agents/add', function(){
        return View::make('admin.agent');
    });
    Route::get('agents/edit/{id}', function($id) {
        $item = Agent::findOrFail($id);

        return View::make('admin.agent',['item' => $item]);
    });

    Route::post('agents/add', 'DashboardController@agentAdd');
    Route::post('agents/edit/{id}', 'DashboardController@agentEdit');
    Route::get('agents/drop/{id}', 'DashboardController@agentDrop');
    //end


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
    //end

    // agents
    Route::get('agents', 'DashboardController@agents');
    Route::get('agents/add', function(){
        return View::make('admin.agent');
    });
    Route::get('agents/edit/{id}', function($id) {
        $item = Agent::findOrFail($id);
        return View::make('admin.agent',['item' => $item]);
    });
    Route::post('agents/add', 'DashboardController@agentAdd');
    Route::post('agents/edit/{id}', 'DashboardController@agentEdit');
    Route::post('agents/drop/{id}', 'DashboardController@agentDrop');
    //end

    // configs
    Route::get('configs', function() {
        $item = Conf::find(1);
        return View::make('admin.configs', ['items' => $item]);
    });
    Route::post('configs', 'DashboardController@configEdit');
    //end

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

Route::get('/catalog/item/{id}', 'CatalogController@show');
