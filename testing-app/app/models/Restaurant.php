<?php

class Restaurant extends \Eloquent {
	protected $guarded = ['id'];
	protected $table = "restaurants";

	public function meals(){
		return $this->hasMany('Meal');
	}

	public function openinghours(){
		return $this->hasMany('Openinghour');
	}

	public function offerstaken(){
		return $this->hasMany('OfferTaken');
	}
}