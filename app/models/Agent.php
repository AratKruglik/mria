<?php

class Agent extends \Eloquent {
	protected $fillable = ['name','lastname','email','phone','facebook','twitter','linkedin','stuff','photo'];

	public static function rules() {
		return $rules = [
			'name' => 'required|min:3|max:255',
			'lastname' => 'required|min:3|max:255',
			'email' => 'required|email',
			'phone' => 'required',
			'stuff' => 'required'
		];
	}

	public static function errors() {
		return $errors = [
			'name.required' => 'Введіть заголовок',
			'name.min' => 'Заголовок має бути від :min символів',
			'name.max' => 'Закголовок має бути до :max символів',
			'meta_k.max' => 'Ключові словамають містити не більше :max символів',
			'name.unique' => 'Об\"єкт з таким заголовком вже існує',
			'price.required' => 'Задайте ціну',
			'price.numeric' => 'Ціна має бути цілим числом або числом с плаваючою комою (до 2х символів посля коми)',
			'rooms.numeric' => 'Кількість кімнат має бути цілим числом або числом с плаваючою комою (до 2х символів посля коми)',
			'area.numeric' => 'Кількість кімнат має бути цілим числом або числом с плаваючою комою (до 2х символів посля коми)',
			'case_type.in' => 'Допустимі значення :in',
			'pay_type.in' => 'Допустимі значення :in',
			'area_type.in' => 'Допустимі значення :in',
			'description.required' => 'Введите описание товара',
			'cover.image' => 'Загруженный файл должен быть изображением в формате jpeg, png, bmp или gif',
			'cover.size' => 'Максимальный размер загружаемого файла - 2 Мб',

		];

	}

	public static function agentAdd($data) {
		$item = Agent::create($data);

		return $item;
	}

	public static function photoUpload($cover, $id) {

		$coverDir = public_path().'/images/agent/';

					if (!is_dir($coverDir)) {
						mkdir($coverDir,0700);
						chmod($coverDir, 0777);
					}

		$coverName = $id.'_photo.jpg';

		$cover->move($coverDir, $coverName);

		$coverToResize = $coverDir.$coverName;

		Image::make($coverToResize)->resize(null, 314, function ($constraint) {$constraint->aspectRatio();})->save($coverToResize);

		$item = Agent::find($id);
		$item->photo = '/images/agent/'.$id.'_photo.jpg';
		$item->save();

		chmod($coverToResize, 0777);
	}

	public static function agentEdit($data, $id) {
		$item = Agent::find($id);

		$item->name = $data['name'];
		$item->lastname = $data['lastname'];
		$item->email = $data['email'];
		$item->phone = $data['phone'];
		$item->facebook = $data['facebook'];
		$item->twitter = $data['twitter'];
		$item->linkedin = $data['linkedin'];
		$item->stuff = $data['stuff'];
		$item->save();

		return $item;
	}






}