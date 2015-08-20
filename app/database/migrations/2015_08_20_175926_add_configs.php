<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddConfigs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('configs', function(Blueprint $table)
		{
			$table->string('facebook', 255);
			$table->string('google', 255);
			$table->string('twitter', 255);
			$table->string('vk', 255);
			$table->string('odnoklassniki', 255);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('configs', function(Blueprint $table)
		{
			
		});
	}

}
