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
	<label class="col-sm-2 col-sm-2 control-label">Оберіть сторінку</label>
	<div class="col-lg-10">
		<select class="form-control m-bot15" name="page">
				<option @if(!isset($item))selected @endif disabled>- Сторінка -</option>
			@foreach($pages as $page)
				@if(isset($item) && $item->slug == $page->slug)
					<option value="{{ $page->slug }}" selected>{{ $page->name }}</option>
				@else
					<option value="{{ $page->slug }}">{{ $page->name }}</option>
				@endif
			@endforeach
		</select>
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 col-sm-2 control-label">Або введіть посилання вручну</label>
	<div class="col-lg-10">
		@if(isset($item))
			{{ Form::input('text', 'slug', $item->slug, ['class' => 'form-control']) }}
		@else
			{{ Form::input('text', 'slug', '', ['class' => 'form-control']) }}
		@endif
			@if($errors->has('slug'))
				@foreach($errors->get('slug') as $slugError)
					<div class="alert alert-block alert-danger fade in">
		              <button data-dismiss="alert" class="close close-sm" type="button">
		                <i class="icon-remove"></i>
		              </button>
		              <strong>Помилка!</strong> {{$slugError}}
		            </div>
            	@endforeach
           @endif
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 col-sm-2 control-label">Порядковий номер</label>
	<div class="col-lg-10">
		@if(isset($item))
			{{ Form::input('number', 'ordered', $item->ordered, ['class' => 'form-control']) }}
		@else
			{{ Form::input('number', 'ordered', $ordered, ['class' => 'form-control']) }}
		@endif
			@if($errors->has('ordered'))
				@foreach($errors->get('slug') as $orderedError)
					<div class="alert alert-block alert-danger fade in">
		              <button data-dismiss="alert" class="close close-sm" type="button">
		                <i class="icon-remove"></i>
		              </button>
		              <strong>Помилка!</strong> {{$orderedError}}
		            </div>
            	@endforeach
           @endif
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