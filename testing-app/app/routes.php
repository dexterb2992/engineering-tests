<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'OffersController@index');
Route::post('/', 'OffersController@find');
Route::post('take-offer', 'OffersController@take');
Route::get('offers-taken', 'OffersController@offerstaken');

Route::get('try', function(){
	$resttimefrom = '8:00am';
	$resttimeto = '11:00pm';

	$st_time    =   strtotime($resttimefrom);
	$end_time   =   strtotime($resttimeto);
	$cur_time   =   strtotime('7:00am');
	//then check

	if($st_time < $cur_time && $end_time > $cur_time)
	{
		echo "WE ARE OPEN  NOW !!";
	}
	else{
		echo "WE ARE CLOSE NOW !!";
	}
});
