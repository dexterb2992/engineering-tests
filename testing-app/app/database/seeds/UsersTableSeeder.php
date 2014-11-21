<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		// $faker = Faker::create();

			User::create([
				'id' => '1',
				'name' => 'John Doe'
			]);
	}

}