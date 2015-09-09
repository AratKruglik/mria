<?php

class Page extends \Eloquent {
	protected $fillable = ['name', 'body', 'slug', 'active', 'created_at', 'updated_at'];


	public static function rules() {
		return $rules = [
			'name' => 'required|min:3|max:255',
			'slug' => 'required|max:255'
		];
	}

	public static function errors() {
		return $errors = [
			'name.required' => 'Введіть заголовок',
			'name.min' => 'Заголовок має бути від :min символів',
			'name.max' => 'Заголовок має бути до :max символів',
			'slug.max' => 'Посилання має бути до :max символів',
		];

	}

	public static function pageAdd($data) {
		$item = Page::create($data);

		return $item;
	}

	public static function pageEdit($data, $id) {
		$item = Page::find($id);

		$item->name = $data['name'];
		$item->slug = $data['slug'];
		$item->body = $data['body'];
		if(isset($data['active'])) { $item->active = $data['active'];} else {$item->active = 0;}
		$item->save();

		return $item;
	}


}