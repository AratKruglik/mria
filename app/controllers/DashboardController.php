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
		$objects = Object::all();

		return View::make('admin.objects')->with('objects', $objects);
	}

	public function objectAdd() {
		$data = Input::all();
		
		$validator = Validator::make($data, Object::rules(), Object::errors());

		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		
		} else {
			
			$item = Object::objectAdd($data);

			if (Input::hasFile('cover')) {
				Object::coverUpload(Input::file('cover'), $item->id);
			 }

			$message = "О'бєкт '.$item->name.' успішно додано в базу";

			return Redirect::to('/dashboard/objects')->with('mess', $message);
		}
	}

	public function objectEdit() {
		$data = Input::all();
		
		$validator = Validator::make($data, Object::rules(), Object::errors());

		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		
		} else {
			
			$item = Object::objectEdit($data, $data["id"]);

			if (Input::hasFile('cover')) {
				Object::coverUpload(Input::file('cover'), $item->id);
			 }

			$message = "Обєкт ".$item->name." успішно додано в базу";

			return Redirect::to('/dashboard/objects')->with('mess', $message);
		}
	}

	public function objectDrop($id) {
		$item = Object::find($id);

		$dir = public_path().'/images/catalog/'.$item->id.'/';
		
		if ($objs = glob($dir."/*")) {
		   foreach($objs as $obj) {
		     is_dir($obj) ? removeDirectory($obj) : unlink($obj);
		   }
    	}
    	rmdir($dir);

		$item->delete();

		return Redirect::to('/dashboard/objects');
	}
	//END

	//GALLERY
	public function gallery() {
		$objects = Object::all();

		return View::make('admin.gallery')->with('galleries', $objects);
	}

	public function galleryPhotoUpload() {
		$data = Input::all();

		if (Input::hasFile('file')) {
				Photo::photoUpload(Input::file('file'), $data['id']);
			 }

		// Photo::photoUpload($data['file'], $data['id']);

	}
	//END
	

	// PAGES
	public function pages() {
		$items = Page::all();

		return View::make('admin.pages',['items' => $items]);
	}

	public function pageAdd() {
		$data = Input::all();
		
		$validator = Validator::make($data, Page::rules(), Page::errors());

		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		
		} else {
			
			$item = Page::pageAdd($data);

			if (Input::hasFile('cover')) {
				Page::coverUpload(Input::file('cover'), $item->id);
			 }

			$message = "Сторінку '.$item->name.' успішно додано в базу";

			return Redirect::to('/dashboard/pages')->with('mess', $message);
		}
	}

	public function pageEdit() {
		$data = Input::all();
		
		$validator = Validator::make($data, Page::rules(), Page::errors());

		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		
		} else {
			
			$item = Page::pageEdit($data, $data["id"]);

			$message = "Сторінку ".$item->name." успішно додано в базу";

			return Redirect::to('/dashboard/pages')->with('mess', $message);
		}
	}

	public function pageDrop($id) {
		$item = Page::find($id);

		$item->delete();

		return Redirect::to('/dashboard/pages');
	}
	//END

	// MENU
	public function menu() {
		$items = Menu::all();

		return View::make('admin.menus',['items' => $items]);
	}

	public function menuAdd() {
		$data = Input::all();
		
		$validator = Validator::make($data, Menu::rules(), Menu::errors());

		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		
		} else {
			
			$item = Menu::menuAdd($data);

			$message = "Пункт меню '.$item->name.' успішно додано в базу";

			return Redirect::to('/dashboard/menu')->with('mess', $message);
		}
	}

	public function menuEdit() {
		$data = Input::all();
		
		$validator = Validator::make($data, Menu::rules(), Menu::errors());

		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		
		} else {
			
			$item = Menu::menuEdit($data, $data["id"]);

			$message = "Пункт меню ".$item->name." успішно додано в базу";

			return Redirect::to('/dashboard/menu')->with('mess', $message);
		}
	}

	public function menuDrop($id) {
		$item = Menu::find($id);

		$item->delete();

		return Redirect::to('/dashboard/menu');
	}
	//END


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

	// AGENTS
	public function agents() {
		$agents = Agent::all();

		return View::make('admin.agents')->with('items', $agents);
	}

	public function agentAdd() {
		$data = Input::all();
		
		$validator = Validator::make($data, Agent::rules(), Agent::errors());

		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		
		} else {
			
			$item = Agent::agentAdd($data);

			if (Input::hasFile('photo')) {
				Agent::photoUpload(Input::file('photo'), $item->id);
			 }

			$message = "О'бєкт '.$item->name.' успішно додано в базу";

			return Redirect::to('/dashboard/agents')->with('mess', $message);
		}
	}

	public function agentEdit() {
		$data = Input::all();
		
		$validator = Validator::make($data, Agent::rules(), Agent::errors());

		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		
		} else {
			
			$item = Agent::agentEdit($data, $data["id"]);

			if (Input::hasFile('photo')) {
				Agent::photoUpload(Input::file('photo'), $item->id);
			 }

			$message = "Обєкт ".$item->name." успішно додано в базу";

			return Redirect::to('/dashboard/agents')->with('mess', $message);
		}
	}

	public function agentDrop($id) {
		$item = Agent::find($id);

		$photo = public_path().$item->photo;

    	rmdir($photo);

		$item->delete();

		return Redirect::to('/dashboard/agents');
	}
	//END


	// CONFIGS
	public function configEdit() {
		$data = Input::all();
		
		$validator = Validator::make($data, Conf::rules(), Conf::errors());

		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		
		} else {
			
			$item = Conf::configEdit($data);

			$message = "Пункт меню ".$item->name." успішно додано в базу";

			return Redirect::to('/dashboard')->with('mess', $message);
		}
	}
	//END

	

}