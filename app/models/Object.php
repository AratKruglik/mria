<?php

class Object extends \Eloquent {
	protected $fillable = ['name',
			  	'location_id',
			  	'sublocation_id',
			  	'address',
			  	'type_id',
			  	'area',
			  	'area_type',
			  	'rooms',
			  	'case_type',
			  	'price',
			  	'currency',
			  	'pay_type',
			  	'termins',
			  	'description',
			  	'cover',
			  	'agent_id',
			  	'slug'];

	public function photos() {
		return $this->hasMany('Photo');
	}
}