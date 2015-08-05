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

		// $this->call('UserTableSeeder');
		$faker = Faker\Factory::create();

		for ($i = 0; $i < 52; $i++)
			{
			  $user = Photo::create(array(
			    'object_id' => $faker->numberBetween($min = 1, $max = 52),
			    'path' => $faker->imageUrl($width = 870, $height = 570)
			    ));
			}
	}

}
