<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestoreBase extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Таблица агентов
		Schema::create('agents', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('object_id');
			$table->string('name', 255);
			$table->string('lastname', 255);
			$table->string('email', 255);
			$table->string('phone', 255);
			$table->string('facebook', 255);
			$table->string('twitter', 255);
			$table->string('linkedin', 255);
			$table->string('stuff', 255);
			$table->string('photo', 255)->default('/images/photos/nophoto.jpg');
			$table->timestamps();
		});
		// Меню
		Schema::create('menus', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 255);
			$table->string('slug', 255);
			$table->boolean('active')->default(1);
			$table->string('ordered', 10);
			$table->timestamps();
		});
		// Новости
		Schema::create('news', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 255);
			$table->string('meta_k', 255);
			$table->text('meta_d');
			$table->longText('body');
			$table->string('cover', 255)->default('/images/nocover.jpg');
			$table->string('slug', 255);
			$table->boolean('active')->default(1);
			$table->timestamps();
		});
		// Конфигурации
		Schema::create('configs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name',255);
			$table->string('email',255);
			$table->string('phone',255);
			$table->string('phone2',255);
			$table->string('address',255);
			$table->text('about',255);
			$table->string('facebook', 255);
			$table->string('google', 255);
			$table->string('twitter', 255);
			$table->string('vk', 255);
			$table->string('odnoklassniki', 255);
			$table->timestamps();
		});
		// Пароли
		Schema::create('password_reminders', function(Blueprint $table)
		{
			$table->string('email')->index();
			$table->string('token')->index();
			$table->timestamp('created_at');
		});
		// Объекты
		// Schema::create('objects', function(Blueprint $table) {
		// 	$table->increments('id')->unsigned();
		// 	$table->string('name',255);
		// 	$table->integer('location_id',255);
		// 	$table->integer('sublocation_id',255);
		// 	$table->string('address',255);
		// 	$table->integer('type_id',255);
		// 	$table->integer('area',255);
		// 	$table->enum('area_type', ['сотки', 'гектари', 'м.кв.']);
		// 	$table->integer('rooms',255);
		// 	$table->enum('case_type', ['продаж', 'оренда', 'обмін']);
		// 	$table->integer('price',255);
		// 	$table->enum('currency', ['$', 'грн.']);
		// 	$table->enum('pay_type', ['за добу', 'в місяць']);
		// 	$table->boolean('termins')->default(0);
		// 	$table->longText('description');
		// 	$table->text('meta_d');
		// 	$table->string('meta_k',255);
		// 	$table->string('cover',255)->default('/images/catalog/no_photo.jpg');
		// 	$table->string('slug',255);
		// 	$table->integer('agent_id',5);
		// 	$table->boolean('active')->default(1);
		// 	$table->timestamps();
		// });
		// Страницы
		Schema::create('pages', function(Blueprint $table) {
			$table->increments('id')->unsigned();
			$table->string('name',255);
			$table->string('slug',255);
			$table->longText('body',255);
			$table->boolean('active')->default(1);
			$table->timestamps();
		});
		// Фото
		// Schema::create('photos', function(Blueprint $table) {
		// 	$table->increments('id');
		// 	$table->integer('object_id',255);
		// 	$table->string('path',255)->default('/images/catalog/no_photo.jpg');
		// });
		//


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
