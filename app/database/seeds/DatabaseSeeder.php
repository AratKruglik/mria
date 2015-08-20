<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('DatabaseSeeder');
		$faker = Faker\Factory::create('ru_RU');

		for ($i = 0; $i < 20; $i++)
			{
			  $object = Article::create(array(
			  	'name' => $faker->lexify('Заголовок новости ???'),
			  	'body' => $faker->word,
			  	'cover' => $faker->imageUrl($width = 850, $height = 550),
			    ));

			  $objects = Article::all();

			  foreach ($objects as $item) {
			  	$item->slug = Slug::make($item->name);;
			  	$item->save();
			  }
			}
	}

}
