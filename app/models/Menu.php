<?php

class Menu extends \Eloquent {
	protected $fillable = ['name', 'slug', 'active', 'ordered'];


	public static function rules() {
		return $rules = [
			'name' => 'required|min:3|max:255',
			'slug' => 'max:255',
			'oredered' => 'max:10'
		];
	}

	public static function errors() {
		return $errors = [
			'name.required' => 'Введіть заголовок',
			'name.min' => 'Заголовок має бути від :min символів',
			'name.max' => 'Заголовок має бути до :max символів',
			'slug.max' => 'Посилання має бути до :max символів'
		];

	}

	public static function menuAdd($data) {
		$item = Menu::create($data);

		if ($data["slug"] == "") {
			$item->slug = $data["page"];
			$item->save();
		} else {
			
			$item->slug = $data["slug"];
			$item->save();

		}

		return $item;
	}

	public static function menuEdit($data, $id) {
		$item = Menu::find($id);

		$item->name = $data['name'];
		$item->ordered = $data['ordered'];
		
		if ($data["slug"] == "") {
			$item->slug = $data["page"];
		} else {
			
				$item->slug = $data["slug"];

		}

		if(isset($data['active'])) { $item->active = $data['active'];} else {$item->active = 0;}
		$item->save();

		return $item;
	}


}