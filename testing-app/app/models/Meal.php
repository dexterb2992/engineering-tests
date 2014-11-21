<?php

class Meal extends \Eloquent {
	protected $guarded = ['id'];
	protected $table = "meals";

	public function restaurant(){
		return $this->belongsTo('Restaurant', 'restaurant_id');
	}
}