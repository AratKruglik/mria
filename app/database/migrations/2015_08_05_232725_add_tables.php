<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('objects', function(Blueprint $table)
		{
			$table->integer('agent_id')->after('cover');
		});

		Schema::create('agents', function(Blueprint $table2)
		{
			$table2->increments('id');
			$table2->integer('object_id');
			$table2->string('name', 255);
			$table2->string('lastname', 255);
			$table2->string('email', 255);
			$table2->string('phone', 255);
			$table2->string('facebook', 255);
			$table2->string('twitter', 255);
			$table2->string('linkedin', 255);
			$table2->string('stuff', 255);
			$table2->string('photo', 255)->default('/images/photos/nophoto.jpg');
		});
	}



	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('agents');
	}

}
