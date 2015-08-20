<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddObjects extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('objects', function(Blueprint $table)
		{
			$table->string('meta_k', 255)->after('name');
			$table->text('meta_d')->after('meta_k');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('objects', function(Blueprint $table)
		{
			
		});
	}

}
