<?php

class Object extends \Eloquent {
	protected $fillable = [];

	public function photos() {
		return $this->hasMany('Photo');
	}
}