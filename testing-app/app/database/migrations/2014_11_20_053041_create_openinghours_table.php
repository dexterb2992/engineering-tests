<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOpeninghoursTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('openinghours', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('from_hour');
			$table->string('to_hour');
			$table->string('day');
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
		Schema::drop('openinghours');
	}

}
