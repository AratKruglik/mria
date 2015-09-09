<div class="form-group">
	<label class="col-sm-2 col-sm-2 control-label">Назва компанії</label>
	<div class="col-lg-10">
			{{ Form::input('text', 'name', $items['name'], ['class' => 'form-control', 'required']) }}

			@if($errors->has('name'))
				@foreach($errors->get('name') as $nameError)
					<div class="alert alert-block alert-danger fade in">
		              <button data-dismiss="alert" class="close close-sm" type="button">
		                <i class="icon-remove"></i>
		              </button>
		              <strong>Помилка!</strong> {{$nameError}}
		            </div>
            	@endforeach
           @endif
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 col-sm-2 control-label">Email компанії</label>
	<div class="col-lg-10">
			{{ Form::input('text', 'email', $items['email'], ['class' => 'form-control', 'required']) }}

			@if($errors->has('email'))
				@foreach($errors->get('email') as $emailError)
					<div class="alert alert-block alert-danger fade in">
		              <button data-dismiss="alert" class="close close-sm" type="button">
		                <i class="icon-remove"></i>
		              </button>
		              <strong>Помилка!</strong> {{$emailError}}
		            </div>
            	@endforeach
           @endif
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 col-sm-2 control-label">Адреса компанії</label>
	<div class="col-lg-10">
			{{ Form::input('text', 'address', $items['address'], ['class' => 'form-control', 'required']) }}

			@if($errors->has('address'))
				@foreach($errors->get('address') as $addressError)
					<div class="alert alert-block alert-danger fade in">
		              <button data-dismiss="alert" class="close close-sm" type="button">
		                <i class="icon-remove"></i>
		              </button>
		              <strong>Помилка!</strong> {{$addressError}}
		            </div>
            	@endforeach
           @endif
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 col-sm-2 control-label">Телефон компанії</label>
	<div class="col-lg-10">
			{{ Form::input('text', 'phone', $items['phone'], ['class' => 'form-control', 'required']) }}

			@if($errors->has('phone'))
				@foreach($errors->get('phone') as $phoneError)
					<div class="alert alert-block alert-danger fade in">
		              <button data-dismiss="alert" class="close close-sm" type="button">
		                <i class="icon-remove"></i>
		              </button>
		              <strong>Помилка!</strong> {{$phoneError}}
		            </div>
            	@endforeach
           @endif
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 col-sm-2 control-label">Додатковий телефон компанії</label>
	<div class="col-lg-10">
			{{ Form::input('text', 'phone2', $items['phone2'], ['class' => 'form-control']) }}

			@if($errors->has('phone2'))
				@foreach($errors->get('phone2') as $phone2Error)
					<div class="alert alert-block alert-danger fade in">
		              <button data-dismiss="alert" class="close close-sm" type="button">
		                <i class="icon-remove"></i>
		              </button>
		              <strong>Помилка!</strong> {{$phone2Error}}
		            </div>
            	@endforeach
           @endif
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 col-sm-2 control-label">Сторінка Facebook</label>
	<div class="col-lg-10">
			{{ Form::input('text', 'facebook', $items['facebook'], ['class' => 'form-control', 'required']) }}

			@if($errors->has('facebook'))
				@foreach($errors->get('facebook') as $facebookError)
					<div class="alert alert-block alert-danger fade in">
		              <button data-dismiss="alert" class="close close-sm" type="button">
		                <i class="icon-remove"></i>
		              </button>
		              <strong>Помилка!</strong> {{$facebookError}}
		            </div>
            	@endforeach
           @endif
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 col-sm-2 control-label">Сторінка Вконтакте</label>
	<div class="col-lg-10">
			{{ Form::input('text', 'vk', $items['vk'], ['class' => 'form-control', 'required']) }}

			@if($errors->has('vk'))
				@foreach($errors->get('vk') as $vkError)
					<div class="alert alert-block alert-danger fade in">
		              <button data-dismiss="alert" class="close close-sm" type="button">
		                <i class="icon-remove"></i>
		              </button>
		              <strong>Помилка!</strong> {{$vkError}}
		            </div>
            	@endforeach
           @endif
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 col-sm-2 control-label">Сторінка Twitter</label>
	<div class="col-lg-10">
			{{ Form::input('text', 'twitter', $items['twitter'], ['class' => 'form-control', 'required']) }}

			@if($errors->has('twitter'))
				@foreach($errors->get('twitter') as $twitterError)
					<div class="alert alert-block alert-danger fade in">
		              <button data-dismiss="alert" class="close close-sm" type="button">
		                <i class="icon-remove"></i>
		              </button>
		              <strong>Помилка!</strong> {{$twitterError}}
		            </div>
            	@endforeach
           @endif
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 col-sm-2 control-label">Сторінка Google+</label>
	<div class="col-lg-10">
			{{ Form::input('text', 'google', $items['google'], ['class' => 'form-control', 'required']) }}

			@if($errors->has('google'))
				@foreach($errors->get('google') as $googleError)
					<div class="alert alert-block alert-danger fade in">
		              <button data-dismiss="alert" class="close close-sm" type="button">
		                <i class="icon-remove"></i>
		              </button>
		              <strong>Помилка!</strong> {{$googleError}}
		            </div>
            	@endforeach
           @endif
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 col-sm-2 control-label">Сторінка Одноклассники</label>
	<div class="col-lg-10">
			{{ Form::input('text', 'odnoklassniki', $items['odnoklassniki'], ['class' => 'form-control', 'required']) }}

			@if($errors->has('odnoklassniki'))
				@foreach($errors->get('odnoklassniki') as $odnoklassnikiError)
					<div class="alert alert-block alert-danger fade in">
		              <button data-dismiss="alert" class="close close-sm" type="button">
		                <i class="icon-remove"></i>
		              </button>
		              <strong>Помилка!</strong> {{$odnoklassnikiError}}
		            </div>
            	@endforeach
           @endif
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label col-sm-2">Про компанію</label>
	<div class="col-sm-10">
			{{ Form::textarea('about', $items['about'], ['class' => 'form-control ckeditor', 'rows' => '6'])}}

			@if($errors->has('about'))
				@foreach($errors->get('about') as $aboutError)
					<div class="alert alert-block alert-danger fade in">
				      <button data-dismiss="alert" class="close close-sm" type="button">
				        <i class="icon-remove"></i>
				      </button>
				      <strong>Помилка!</strong> {{$aboutError}}
				    </div>
				@endforeach
    		@endif
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label"></label>
	<div class="col-sm-10 pull-left">
		<button type="submit" class="btn btn-info "><i class="icon-refresh"></i> Зберегти</button>
	</div>
</div>