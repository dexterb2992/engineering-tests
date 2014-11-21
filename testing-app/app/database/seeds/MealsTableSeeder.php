<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class MealsTableSeeder extends Seeder {

	public function run()
	{
		// $faker = Faker::create();

			Meal::create([
				'name' => 'Meal 1',
				'price' => '1500',
				'restaurant_id' => '1'
			]);

			Meal::create([
				'name' => 'Meal 2',
				'price' => '3500',
				'restaurant_id' => '1'
			]);

			Meal::create([
				'name' => 'Meal 1',
				'price' => '5500',
				'restaurant_id' => '1'
			]);
	}

}