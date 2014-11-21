<?php

class Openinghour extends \Eloquent {
	protected $guarded = ['id'];
	protected $table = "openinghours";

	public function restaurant(){
		return $this->belongsTo('Restaurant');
	}
}