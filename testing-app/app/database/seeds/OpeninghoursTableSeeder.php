<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class OpeninghoursTableSeeder extends Seeder {

	public function run()
	{
		// $faker = Faker::create();

			Openinghour::create([
				'from_hour' => '8:00am',
				'to_hour' => '11:00pm',
				'day' => 'Mon,Tue,Wed,Thu,Fri',
				'restaurant_id' => '1'
			]);

			Openinghour::create([
				'from_hour' => '10:00am',
				'to_hour' => '10:00pm',
				'day' => 'Sat',
				'restaurant_id' => '1'
			]);
	}

}