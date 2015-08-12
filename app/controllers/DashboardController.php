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
		$orders = Order::where('processed', 1)->count();
		$newOrders = Order::where('processed', 0)->count();
		$summ = 0;
		foreach (Order::all() as $order1) {
			$summ = $summ + $order1->summ;
		}
		return View::make('admin.index')->with('users', $users)->with('orders', $orders)->with('newOrders', $newOrders)->with('summ', $summ);
	}


	//GOODS FUNCTIONS
	public function goods() {
		$goods = Good::all();
		return View::make('admin.goods')->with('goods', $goods);
	}

	public function goodAdd() {
		$data = Input::all();

		$validator = Validator::make($data, Good::rules(), Good::errors());

		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		} else {
			$item = Good::goodAdd($data);

			if (Input::hasFile('cover')) {
				Good::coverUpload(Input::file('cover'), $item->id);
			 }

			 if (Input::hasFile('thumb_cover')) {
				Good::thumbUpload(Input::file('thumb_cover'), $item->id);
			 }

			$message = 'Товар '.$item->name.' успешно добавлен в базу';

			return Redirect::to('/dashboard/goods')->with('mess', $message);
		}

	}

	public function goodEdit($id) {
		$data = Input::all();

		$validator = Validator::make($data, Good::rules(), Good::errors());

		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		} else {
			$item = Good::goodEdit($data, $id);
			
			if (Input::hasFile('cover')) {
				Good::coverUpload(Input::file('cover'), $item->id);
			 }

			 if (Input::hasFile('thumb_cover')) {
				Good::thumbUpload(Input::file('thumb_cover'), $item->id);
			 }

			$message = 'Товар '.$item->name.' успешно изменен';

			return Redirect::to('/dashboard/goods')->withMess($message);
		}

	}

	public function goodDrop($id) {
		$item = Good::find($id);

		$dir = public_path().'/images/goods/'.$item->id.'/';
		
		if ($objs = glob($dir."/*")) {
		   foreach($objs as $obj) {
		     is_dir($obj) ? removeDirectory($obj) : unlink($obj);
		   }
    	}
    	rmdir($dir);

		$message = 'Товар '.$item->name.' успешно удален';
		$item->delete();

		return Redirect::to('/dashboard/goods')->withMess($message);
	}

////

	//CATEGORIES FUNCTIONS
	public function categories() {
		$categories = Category::all();
		return View::make('admin.categories')->with('categories', $categories);
	}


	public function categoryAdd() {
		$data = Input::all();

		$validator = Validator::make($data, Category::rules(), Category::errors());

		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		} else {
			$item = Category::categoryAdd($data);

			$message = 'Категория '.$item->name.' успешно добавлена в базу';

			return Redirect::to('/dashboard/categories')->with('mess', $message);
		}
	}

	public function categoryEdit($id) {
		$data = Input::all();

		$validator = Validator::make($data, Category::rules(), Category::errors());

		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		} else {

			$item = Category::categoryEdit($data, $id);

			$message = 'Категория '.$item->name.' успешно изменена';

			return Redirect::to('/dashboard/categories')->with('mess', $message);
		}
	}

	public function categoryDrop($id) {
		$item = Good::find($id);

		$message = 'Категория '.$item->name.' успешно удалена';
		$item->delete();

		return Redirect::to('/dashboard/categories')->withMess($message);
	}

	

}