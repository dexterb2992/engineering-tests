<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class RestaurantsTableSeeder extends Seeder {

	public function run()
	{
		// $faker = Faker::create();

			Restaurant::create([
				'id' => '1',
				'name' => 'Farheen Cooking Classes Delhi',
				'cuisines' => 'Indian',
				'guest_max' => '200',
				'guest_min' => '1',
				'address_street' => 'B-3, Third Floor Street-2',
				'address_state' => 'Joshi Colony, IP Extention',
				'address_city' => 'New Delhi ',
				'address_zip' => '110092',
				'address_country' => 'India',
				'is_active' => '1'
			]);
	}

}