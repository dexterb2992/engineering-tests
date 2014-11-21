<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRestaurantsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('restaurants', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('cuisines');
			$table->integer('guest_max');
			$table->integer('guest_min');
			$table->string('address_street')->nullable();
			$table->string('address_city')->nullable();
			$table->string('address_state')->nullable();
			$table->string('address_zip')->nullable();
			$table->string('address_country')->nullable();
			$table->integer('is_active')->default('1');
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
		Schema::drop('restaurants');
	}

}
