<?php namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Facades\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Header extends AbstractWidget {

    /**
     * You can treat this method just like a controller action.
     * Return a view or anything else you want to display
     */
	public function run()
	{	
		$configs = DB::table('configs')->get();
		return View::make('widgets.header', ['config' => $configs]);
	}
}