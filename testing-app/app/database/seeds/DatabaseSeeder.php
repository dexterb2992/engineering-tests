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

		$this->call('UsersTableSeeder');
		$this->call('RestaurantsTableSeeder');
		$this->call('OpeninghoursTableSeeder');
		$this->call('MealsTableSeeder');
	}

}
