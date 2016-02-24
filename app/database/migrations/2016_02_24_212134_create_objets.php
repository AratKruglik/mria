<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjets extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Объекты
		Schema::create('objects', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name',255);
			$table->integer('location_id');
			$table->integer('sublocation_id');
			$table->string('address',255);
			$table->integer('type_id');
			$table->integer('area');
			$table->enum('area_type', ['сотки', 'гектари', 'м.кв.']);
			$table->integer('rooms');
			$table->enum('case_type', ['продаж', 'оренда', 'обмін']);
			$table->integer('price');
			$table->enum('currency', ['$', 'грн.']);
			$table->enum('pay_type', ['за добу', 'в місяць']);
			$table->boolean('termins')->default(0);
			$table->longText('description');
			$table->text('meta_d');
			$table->string('meta_k',255);
			$table->string('cover',255)->default('/images/catalog/no_photo.jpg');
			$table->string('slug',255);
			$table->integer('agent_id');
			$table->boolean('active')->default(1);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
