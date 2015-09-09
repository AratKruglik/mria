<div class="form-group">
	<label class="col-sm-2 col-sm-2 control-label">Ім'я</label>
	<div class="col-lg-10">
		@if(isset($item))
			{{ Form::input('text', 'name', $item->name, ['class' => 'form-control', 'required']) }}
		@else
			{{ Form::input('text', 'name', '', ['class' => 'form-control' , 'required']) }}
		@endif
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
	<label class="col-sm-2 col-sm-2 control-label">Прізвище</label>
	<div class="col-lg-10">
		@if(isset($item))
			{{ Form::input('text', 'lastname', $item->lastname, ['class' => 'form-control', 'required']) }}
		@else
			{{ Form::input('text', 'lastname', '', ['class' => 'form-control' , 'required']) }}
		@endif
			@if($errors->has('lastname'))
				@foreach($errors->get('lastname') as $lastnameError)
					<div class="alert alert-block alert-danger fade in">
		              <button data-dismiss="alert" class="close close-sm" type="button">
		                <i class="icon-remove"></i>
		              </button>
		              <strong>Помилка!</strong> {{$lastnameError}}
		            </div>
            	@endforeach
           @endif
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 col-sm-2 control-label">Email</label>
	<div class="col-lg-10">
		@if(isset($item))
			{{ Form::input('text', 'email', $item->email, ['class' => 'form-control', 'required']) }}
		@else
			{{ Form::input('text', 'email', '', ['class' => 'form-control' , 'required']) }}
		@endif
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
	<label class="col-sm-2 col-sm-2 control-label">Телефон</label>
	<div class="col-lg-10">
		@if(isset($item))
			{{ Form::input('text', 'phone', $item->phone, ['class' => 'form-control', 'required']) }}
		@else
			{{ Form::input('text', 'phone', '', ['class' => 'form-control' , 'required']) }}
		@endif
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
	<label class="col-sm-2 col-sm-2 control-label">Посада</label>
	<div class="col-lg-10">
		@if(isset($item))
			{{ Form::input('text', 'stuff', $item->stuff, ['class' => 'form-control', 'required']) }}
		@else
			{{ Form::input('text', 'stuff', '', ['class' => 'form-control' , 'required']) }}
		@endif
			@if($errors->has('stuff'))
				@foreach($errors->get('stuff') as $stuffError)
					<div class="alert alert-block alert-danger fade in">
		              <button data-dismiss="alert" class="close close-sm" type="button">
		                <i class="icon-remove"></i>
		              </button>
		              <strong>Помилка!</strong> {{$stuffError}}
		            </div>
            	@endforeach
           @endif
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 col-sm-2 control-label">Профіль Facebook</label>
	<div class="col-lg-10">
		@if(isset($item))
			{{ Form::input('text', 'facebook', $item->facebook, ['class' => 'form-control', 'required']) }}
		@else
			{{ Form::input('text', 'facebook', '', ['class' => 'form-control' , 'required']) }}
		@endif
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
	<label class="col-sm-2 col-sm-2 control-label">Профіль Twitter</label>
	<div class="col-lg-10">
		@if(isset($item))
			{{ Form::input('text', 'twitter', $item->twitter, ['class' => 'form-control', 'required']) }}
		@else
			{{ Form::input('text', 'twitter', '', ['class' => 'form-control' , 'required']) }}
		@endif
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
	<label class="col-sm-2 col-sm-2 control-label">Профіль Linkedin</label>
	<div class="col-lg-10">
		@if(isset($item))
			{{ Form::input('text', 'linkedin', $item->linkedin, ['class' => 'form-control', 'required']) }}
		@else
			{{ Form::input('text', 'linkedin', '', ['class' => 'form-control' , 'required']) }}
		@endif
			@if($errors->has('linkedin'))
				@foreach($errors->get('linkedin') as $linkedinError)
					<div class="alert alert-block alert-danger fade in">
		              <button data-dismiss="alert" class="close close-sm" type="button">
		                <i class="icon-remove"></i>
		              </button>
		              <strong>Помилка!</strong> {{$linkedinError}}
		            </div>
            	@endforeach
           @endif
	</div>
</div>

<div class="form-group">
	<label class="control-label col-md-2">Фото</label>
	<div class="col-md-10">
		<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="max-width: 400px; max-height: 300px; line-height: 20px;">
					<img src="@if(isset($item)){{ $item->photo }} @endif" alt="">
				</div>
			<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 400px; max-height: 300px;"></div>
			<div>
				<span class="btn btn-white btn-file">
					<span class="fileupload-new"><i class="icon-paper-clip"></i> Змінити фото</span>
					<span class="fileupload-exists"><i class="icon-undo"></i> Інше</span>
					<input type="file" name="photo" class="default">
				</span>
			</div>
		</div>
		@if($errors->has('photo'))
			@foreach($errors->get('photo') as $photoError)
				<div class="alert alert-block alert-danger fade in">
	              <button data-dismiss="alert" class="close close-sm" type="button">
	                <i class="icon-remove"></i>
	              </button>
	              <strong>Помилка!</strong> {{$photoError}}
	            </div>
	    	@endforeach
    	@endif
	</div>
</div>

@if(isset($item)) <input type="hidden" name="id" value="{{ $item->id }}"> @endif

<div class="form-group">
	<label class="col-sm-2 control-label"></label>
	<div class="col-sm-10 pull-left">
		<button type="submit" class="btn btn-info "><i class="icon-refresh"></i> @if(isset($item))Зберегти @else Додати @endif</button>
	</div>
</div>