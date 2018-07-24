<?php

class Conf extends \Eloquent {
	protected $fillable = ['name', 'email', 'phone', 'phone2', 'address', 'about', 'facebook','twitter','google','vk','odnoklassniki', 'created_at', 'updated_at'];


	public static function rules() {
		return $rules = [
			'name' => 'required|min:3|max:255',
			'email' => 'required|max:255',
			'phone' => 'required|max:255',
			'address' => 'required|max:255',
			'about' => 'required',
		];
	}

	public static function errors() {
		return $errors = [
			'name.required' => 'Введіть заголовок',
			'name.min' => 'Заголовок має бути від :min символів',
			'name.max' => 'Заголовок має бути до :max символів',
			'email.required' => 'Введіть email',
			'email.max' => 'Email має бути до :max символів',
			'address.required' => 'Введіть адресу',
			'address.max' => 'Адреса має бути до :max символів',
			'about.required' => 'Введіть описання компанії'
		];

	}

	public static function configEdit($data) {
		$item = Conf::find(1);

		$item->name = $data['name'];
		$item->email = $data['email'];
		$item->phone = $data['phone'];
		$item->phone2 = $data['phone2'];
		$item->address = $data['address'];
		$item->facebook = $data['facebook'];
		$item->about = $data['about'];
//		$item->vk = $data['vk'];
		$item->google = $data['google'];
		$item->twitter = $data['twitter'];
//		$item->odnoklassniki = $data['odnoklassniki'];

		$item->save();

		return $item;
	}


}