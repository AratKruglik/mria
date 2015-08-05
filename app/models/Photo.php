<?php

class Photo extends \Eloquent {
	protected $fillable = [];

	public function property() {
		return $this->belongsTo('Object');
	}
}