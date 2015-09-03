<?php

class DashboardController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /dashboard
	 *
	 * @return Response
	 */
	public function index() {

		$users = User::all();

		return View::make('admin.index')->with('users', $users);
	}

	// OBJECTS
	public function objects() {
		$users = User::all();

		return View::make('admin.index')->with('users', $users);
	}
	//END
	









public function getPages() {
		return View::make('admin.index');
	}


	public function articles2() {
		return View::make('admin.index');
	}


	// ARTICLES FUNCTIONS

	public function articles() {
		$articles = Article::all();
		return View::make('admin.articles', ['articles' => $articles]);
	}

	public function articleAdd() {
		$data = Input::all();
		
		$validator = Validator::make($data, Article::rules(), Article::errors());

		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		
		} else {
			
			$item = Article::articleAdd($data);

			if (Input::hasFile('cover')) {
				Article::coverUpload(Input::file('cover'), $item->id);
			 }

			 if (Input::hasFile('thumb_cover')) {
				Article::thumbUpload(Input::file('thumb_cover'), $item->id);
			 }

			$message = 'Статья '.$item->name.' успешно добавлена в базу';

			return Redirect::to('/dashboard/articles')->with('mess', $message);
		}

	}

	public function articleEdit($id) {
		$data = Input::all();

		$validator = Validator::make($data, Article::rules(), Article::errors());

		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		} else {
			$item = Article::articleEdit($data, $id);
			
			if (Input::hasFile('cover')) {
				Article::coverUpload(Input::file('cover'), $item->id);
			 }

			 if (Input::hasFile('thumb_cover')) {
				Article::thumbUpload(Input::file('thumb_cover'), $item->id);
			 }

			$message = 'Статья '.$item->name.' успешно изменена';

			return Redirect::to('/dashboard/articles')->withMess($message);
		}

	}

	public function articleDrop($id) {
		$item = Article::find($id);

		$dir = public_path().'/images/articles/'.$id.'/';
		
		if ($objs = glob($dir."/*")) {
		   foreach($objs as $obj) {
		     is_dir($obj) ? removeDirectory($obj) : unlink($obj);
		   }
    	}
    	rmdir($dir);

		$message = 'Статья '.$item->name.' успешно удалена';
		$item->delete();

		return Redirect::to('/dashboard/articles')->withMess($message);
	}

	

}