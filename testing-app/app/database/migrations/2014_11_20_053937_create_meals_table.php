<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMealsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('meals', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->double('price');
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
		Schema::drop('meals');
	}

}
