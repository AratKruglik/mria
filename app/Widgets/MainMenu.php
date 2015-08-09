<?php namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Facades\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MainMenu extends AbstractWidget {

    /**
     * You can treat this method just like a controller action.
     * Return a view or anything else you want to display
     */
	public function run()
	{	
		$menu = DB::table('menus')->where('active', 1)->orderBy('id')->get();
		return View::make('widgets.mainmenu', ['menus' => $menu]);
	}
}