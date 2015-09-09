<div class="form-group">
	<label class="col-sm-2 col-sm-2 control-label">Заголовок</label>
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
	<label class="col-sm-2 col-sm-2 control-label">Ключові слова (SEO)</label>
	<div class="col-lg-10">
		@if(isset($item))
			{{ Form::input('text', 'meta_k', $item->meta_k, ['class' => 'form-control']) }}
		@else
			{{ Form::input('text', 'meta_k', '', ['class' => 'form-control']) }}
		@endif
			@if($errors->has('meta_k'))
				@foreach($errors->get('meta_k') as $meta_kError)
					<div class="alert alert-block alert-danger fade in">
		              <button data-dismiss="alert" class="close close-sm" type="button">
		                <i class="icon-remove"></i>
		              </button>
		              <strong>Помилка!</strong> {{$meta_kError}}
		            </div>
            	@endforeach
           @endif
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label col-sm-2">Ключове описання (SEO)</label>
	<div class="col-sm-10">
			@if(isset($item))
				{{ Form::textarea('meta_d', $item->meta_d, ['class' => 'form-control', 'rows' => '3'])}}
			@else
				{{ Form::textarea('meta_d', '', ['class' => 'form-control', 'rows' => '3'])}}
			@endif

			@if($errors->has('meta_d'))
				@foreach($errors->get('meta_d') as $meta_dError)
					<div class="alert alert-block alert-danger fade in">
				      <button data-dismiss="alert" class="close close-sm" type="button">
				        <i class="icon-remove"></i>
				      </button>
				      <strong>Помилка!</strong> {{$meta_dError}}
				    </div>
				@endforeach
    		@endif
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label col-lg-2">О'бєкт</label>
	<div class="col-lg-10">
		<select class="form-control m-bot15" name="type_id" required>
				<option @if(!isset($item))selected @endif disabled>- О'бєкт -</option>
			@foreach($types as $type)
				@if(isset($item) && $type->id == $item->type_id)
					<option value="{{ $type->id }}" selected>{{ $type->name }}</option>
				@else
					<option value="{{ $type->id }}">{{ $type->name }}</option>
				@endif
			@endforeach
		</select>
	</div>
</div>

<div class="form-group">
	<label class="control-label col-lg-2">Площа</label>
	<div class="col-lg-2">
		<div class="input-group m-bot15">
			@if(isset($item))
				{{ Form::input('text', 'area', $item->area, ['class' => 'form-control']) }}
			@else
				{{ Form::input('text', 'area', '', ['class' => 'form-control']) }}
			@endif
		</div>
		@if($errors->has('area'))
			@foreach($errors->get('area') as $areaError)
				<div class="alert alert-block alert-danger fade in">
	              <button data-dismiss="alert" class="close close-sm" type="button">
	                <i class="icon-remove"></i>
	              </button>
	              <strong>Помилка!</strong> {{$areaError}}
	            </div>
	    	@endforeach
   		@endif
	</div>
	<div class="col-lg-2">
		<select class="form-control m-bot15  pull-left" name="area_type" required>
			<option @if(!isset($item))selected @endif disabled>- Тип -</option>
			<option value="сотки" @if(isset($item) && $item->area_type == 'сотки')selected @endif>сотки</option>
			<option value="гектари" @if(isset($item) && $item->area_type == 'гектари')selected @endif>гектари</option>
			<option value="м.кв." @if(isset($item) && $item->area_type == 'м.кв.')selected @endif>м.кв.</option>
		</select>
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 col-sm-2 control-label">Кількість кімнат</label>
	<div class="col-lg-10">
		@if(isset($item))
			{{ Form::input('text', 'rooms', $item->rooms, ['class' => 'form-control']) }}
		@else
			{{ Form::input('text', 'rooms', '', ['class' => 'form-control' ]) }}
		@endif
			@if($errors->has('rooms'))
				@foreach($errors->get('rooms') as $roomsError)
					<div class="alert alert-block alert-danger fade in">
		              <button data-dismiss="alert" class="close close-sm" type="button">
		                <i class="icon-remove"></i>
		              </button>
		              <strong>Помилка!</strong> {{$roomsError}}
		            </div>
            	@endforeach
           @endif
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label col-lg-2">Вид операції</label>
	<div class="col-lg-10">
		<select class="form-control m-bot15" name="case_type" required>
				<option @if(!isset($item))selected @endif disabled>- Вид -</option>
				<option value="оренда" @if(isset($item) && $item->case_type == 'оренда') selected @endif>оренда</option>
				<option value="продаж" @if(isset($item) && $item->case_type == 'продаж') selected @endif>продаж</option>
				<option value="обмін" @if(isset($item) && $item->case_type == 'обмін') selected @endif>обмін</option>
		</select>
	</div>
</div>

<div class="form-group">
	<label class="control-label col-lg-2">Ціна</label>
	<div class="col-lg-2">
		<div class="input-group m-bot15">
			@if(isset($item))
				{{ Form::input('text', 'price', $item->price, ['class' => 'form-control', 'required']) }}
			@else
				{{ Form::input('text', 'price', '', ['class' => 'form-control', 'required']) }}
			@endif
		</div>
		@if($errors->has('price'))
			@foreach($errors->get('price') as $priceError)
				<div class="alert alert-block alert-danger fade in">
	              <button data-dismiss="alert" class="close close-sm" type="button">
	                <i class="icon-remove"></i>
	              </button>
	              <strong>Помилка!</strong> {{$priceError}}
	            </div>
	    	@endforeach
   		@endif
	</div>
	<div class="col-lg-2">
		<select class="form-control m-bot15  pull-left" name="currency" required>
			<option @if(!isset($item))selected @endif disabled>- Валюта -</option>
			<option value="грн." @if(isset($item) && $item->currency == 'грн.')selected @endif>грн.</option>
			<option value="$" @if(isset($item) && $item->currency == '$')selected @endif>$</option>
		</select>
	</div>
	<div class="col-lg-2">
		<select class="form-control m-bot15  pull-left" name="pay_type">
			<option @if(!isset($item))selected @endif disabled>- Строк -</option>
			<option value="в місяц" @if(isset($item) && $item->pay_type == 'в місяц')selected @endif>в місяц</option>
			<option value="за добу" @if(isset($item) && $item->pay_type == 'за добу')selected @endif>за добу</option>
		</select>
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 col-sm-2 control-label">Адреса</label>
	<div class="col-lg-10">
		@if(isset($item))
			{{ Form::input('text', 'address', $item->address, ['class' => 'form-control', 'required']) }}
		@else
			{{ Form::input('text', 'address', '', ['class' => 'form-control', 'required']) }}
		@endif
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
	<label class="col-sm-2 control-label col-sm-2">Описання</label>
	<div class="col-sm-10">
			@if(isset($item))
				{{ Form::textarea('description', $item->description, ['class' => 'form-control ckeditor', 'rows' => '6'])}}
			@else
				{{ Form::textarea('description', '', ['class' => 'form-control ckeditor', 'rows' => '6'])}}
			@endif

			@if($errors->has('description'))
				@foreach($errors->get('description') as $descriptionError)
					<div class="alert alert-block alert-danger fade in">
				      <button data-dismiss="alert" class="close close-sm" type="button">
				        <i class="icon-remove"></i>
				      </button>
				      <strong>Ошибка!</strong> {{$descriptionError}}
				    </div>
				@endforeach
    		@endif
	</div>
</div>

<div class="form-group">
	<label class="control-label col-md-2">Головне фото</label>
	<div class="col-md-10">
		<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="max-width: 400px; max-height: 300px; line-height: 20px;">
					<img src="@if(isset($item)){{ $item->cover }} @endif" alt="">
				</div>
			<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 400px; max-height: 300px;"></div>
			<div>
				<span class="btn btn-white btn-file">
					<span class="fileupload-new"><i class="icon-paper-clip"></i> Змінити фото</span>
					<span class="fileupload-exists"><i class="icon-undo"></i> Інше</span>
					<input type="file" name="cover" class="default">
				</span>
			</div>
		</div>
		@if($errors->has('cover'))
			@foreach($errors->get('cover') as $coverError)
				<div class="alert alert-block alert-danger fade in">
	              <button data-dismiss="alert" class="close close-sm" type="button">
	                <i class="icon-remove"></i>
	              </button>
	              <strong>Помилка!</strong> {{$coverError}}
	            </div>
	    	@endforeach
    	@endif
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label col-lg-2">Агент</label>
	<div class="col-lg-10">
		<select class="form-control m-bot15" name="agent_id" required>
			<option @if(!isset($item))selected @endif disabled>- Агент -</option>
			@if(isset($agents))
				@foreach($agents as $agent)
					<option value="{{ $agent->id }}" @if(isset($item) && $agent->id == $item->agent_id) selected @endif>{{ $agent->name }} {{ $agent->lastname }}</option>
				@endforeach
			@endif
		</select>
	</div>
</div>

<div class="form-group">
	<label class="control-label col-md-2">Терміново</label>
		<div class="col-sm-10">
                <div class="switch switch-square" data-on-label="<i class=' icon-ok'></i>" data-off-label="<i class='icon-remove'></i>">
                    <input type="checkbox" name="termins" value="1" @if(isset($item->termins) && $item->termins == 1) checked @endif />
               </div>
		</div>
</div>

@if(isset($item))
<div class="form-group">
	<label class="control-label col-md-2">Активність</label>
		<div class="col-sm-10">
                <div class="switch switch-square" data-on-label="<i class=' icon-ok'></i>" data-off-label="<i class='icon-remove'></i>">
                    <input type="checkbox" name="active" value="1" @if(isset($item->active) && $item->active == 1) checked @endif />
               </div>
		</div>
</div>
@endif

@if(isset($item)) <input type="hidden" name="id" value="{{ $item->id }}"> @endif

<div class="form-group">
	<label class="col-sm-2 control-label"></label>
	<div class="col-sm-10 pull-left">
		<button type="submit" class="btn btn-info "><i class="icon-refresh"></i> @if(isset($item))Зберегти @else Додати @endif</button>
	</div>
</div>