<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Фото
		Schema::create('photos', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('object_id');
			$table->string('path',255)->default('/images/catalog/no_photo.jpg');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('photos')
	}

}
