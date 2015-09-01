<?php namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Facades\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LastNews extends AbstractWidget {

    /**
     * You can treat this method just like a controller action.
     * Return a view or anything else you want to display
     */
	public function run()
	{
		$news = DB::table('articles')->where('active', '1')->take(3)->get();

		return View::make('widgets.lastnews', ['lastnews' => $news]);
	}
}