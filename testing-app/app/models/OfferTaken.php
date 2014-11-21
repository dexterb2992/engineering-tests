<?php

class OfferTaken extends \Eloquent {
	protected $guarded = ['id'];
	protected $table = "offer_taken";

	public function user(){
		return $this->belongsTo('User', 'user_id');
	}

	public function restaurant(){
		return $this->belongsTo('Restaurant', 'restaurant_id');
	}
}