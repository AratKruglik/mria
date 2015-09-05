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

	public static function rules() {
		return $rules = [
			'name' => 'required|min:3|max:255',
			'meta_k' => 'max:255',
			'price' => 'required|numeric',
			'area' => 'numeric',
			'rooms' => 'numeric',
			'case_type' => 'in:продаж,оренда,обмін',
			'pay_type' => 'in:за добу,в місяць',
			'area_type' => 'in:сотки,гектари,м.кв.',
			'slug' => 'min:3|max:255',
			'description' => 'required',
			'cover' => 'image'
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

	public static function objectAdd($data) {
		$item = Object::create($data);

		$item->slug = Slug::make($data['name']);
		$item->save();

		return $item;
	}

	public static function coverUpload($cover, $id) {

		$coverDir = public_path().'/images/catalog/'.$id.'/';

					if (!is_dir($coverDir)) {
						mkdir($coverDir,0700);
						chmod($coverDir, 0777);
					}

		$coverName = 'cover.jpg';

		$cover->move($coverDir, $coverName);

		$coverToResize = $coverDir.$coverName;

		Image::make($coverToResize)->resize(850, null, function ($constraint) {$constraint->aspectRatio();})->save($coverToResize);

		$item = Object::find($id);
		$item->cover = '/images/catalog/'.$id.'/cover.jpg';
		$item->save();

		chmod($coverToResize, 0777);
	}

	public static function objectEdit($data, $id) {
		$item = Object::find($id);

		$item->name = $data['name'];
		$item->price = $data['price'];
		$item->address = $data['address'];
		$item->area = $data['area'];
		$item->currency = $data['currency'];
		$item->rooms = $data['rooms'];
		$item->area_type = $data['area_type'];
		$item->case_type = $data['case_type'];
		$item->pay_type = $data['pay_type'];
		$item->type_id = $data['type_id'];
		$item->agent_id = $data['agent_id'];
		$item->meta_k = $data['meta_k'];
		$item->meta_d = $data['meta_d'];
		$item->slug = Slug::make($data['name']);
		$item->description = $data['description'];
		if(isset($data['termins'])) { $item->termins = $data['termins']; } else {$item->termins = 0;}
		if(isset($data['active'])) { $item->active = $data['active'];} else {$item->active = 0;}
		$item->save();

		return $item;
	}






}