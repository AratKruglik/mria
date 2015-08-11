<?php namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Facades\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PropertySide extends AbstractWidget {

    /**
     * You can treat this method just like a controller action.
     * Return a view or anything else you want to display
     */
	public function run()
	{
		$apartaments = DB::table('objects')->where('type_id', '2')->count();
		$houses = DB::table('objects')->where('type_id', '1')->count();
		$area = DB::table('objects')->where('type_id', '3')->count();

		return View::make('widgets.property_aside', ['apartaments' => $apartaments, 'houses' => $houses, 'area' => $area]);
	}
}