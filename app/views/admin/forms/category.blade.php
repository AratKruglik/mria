<div class="form-group">
	<label class="col-sm-2 col-sm-2 control-label">Название категории</label>
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
		              <strong>Ошибка!</strong> {{$nameError}}
		            </div>
            	@endforeach
           @endif
	</div>
</div>

@if(isset($item))
<div class="form-group">
	<label class="control-label col-md-2">Видимость</label>
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
		<button type="submit" class="btn btn-info "><i class="icon-refresh"></i> @if(isset($item))Сохранить @else Добавить @endif</button>
	</div>
</div>