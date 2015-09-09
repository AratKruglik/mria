<?php

class Photo extends \Eloquent {
	protected $fillable = [];

	public function property() {
		return $this->belongsTo('Object');
	}


	public static function photoUpload($cover, $id) {

		

		$coverDir = public_path().'/images/catalog/'.$id.'/';

					if (!is_dir($coverDir)) {
						mkdir($coverDir,0700);
						chmod($coverDir, 0777);
					}

		$coverName = time().'.jpg';

		$cover->move($coverDir, $coverName);

		$coverToResize = $coverDir.$coverName;

		Image::make($coverToResize)->resize(850, null, function ($constraint) {$constraint->aspectRatio();})->save($coverToResize);

		chmod($coverToResize, 0777);
	}
}