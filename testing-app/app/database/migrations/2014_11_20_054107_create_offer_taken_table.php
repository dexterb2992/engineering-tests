<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOfferTakenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('offer_taken', function(Blueprint $table)
		{
			$table->increments('id');
			$table->double('budget');
			$table->string('time_of_meal');
			$table->integer('guests_number');
			$table->integer('user_id')->unsigned()->index();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->integer('restaurant_id')->unsigned()->index();
			$table->foreign('restaurant_id')->references('id')->on('restaurants')->onDelete('cascade');
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
		Schema::drop('offer_taken');
	}

}
