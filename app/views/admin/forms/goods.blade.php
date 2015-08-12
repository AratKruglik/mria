<div class="form-group">
	<label class="col-sm-2 col-sm-2 control-label">Название товара</label>
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

@if(isset($item) )
<div class="form-group">
	<label class="col-sm-2 col-sm-2 control-label">Ссылка на товар</label>
	<div class="col-lg-10">
			{{ Form::input('text', 'slug', $item->slug, ['class' => 'form-control']) }}
			@if($errors->has('slug'))
				@foreach($errors->get('slug') as $slugError)
					<div class="alert alert-block alert-danger fade in">
		              <button data-dismiss="alert" class="close close-sm" type="button">
		                <i class="icon-remove"></i>
		              </button>
		              <strong>Ошибка!</strong> {{$slugError}}
		            </div>
            	@endforeach
           @endif
	</div>
</div>
@endif

<div class="form-group">
	<label class="col-sm-2 col-sm-2 control-label">Ключевые слова</label>
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
		              <strong>Ошибка!</strong> {{$meta_kError}}
		            </div>
            	@endforeach
           @endif
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label col-sm-2">Ключевое описание</label>
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
				      <strong>Ошибка!</strong> {{$meta_dError}}
				    </div>
				@endforeach
    		@endif
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label col-lg-2">Категория</label>
	<div class="col-lg-10">
		<select class="form-control m-bot15" name="category_id">
				<option @if(!isset($item))selected @endif disabled>- Категория -</option>
			@foreach($categories as $category)
				@if(isset($item) && $category->id == $item->category_id)
					<option value="{{ $category->id }}" selected>{{ $category->name }}</option>
				@else
					<option value="{{ $category->id }}">{{ $category->name }}</option>
				@endif
			@endforeach
		</select>
	</div>
</div>

<div class="form-group">
	<label class="control-label col-lg-2">Цена</label>
	<div class="col-lg-10">
		<div class="input-group m-bot15">
			@if(isset($item))
				{{ Form::input('text', 'price', $item->price, ['class' => 'form-control', 'required']) }}
			@else
				{{ Form::input('text', 'price', '', ['class' => 'form-control', 'required']) }}
			@endif
			<span class="input-group-addon">грн.</span>
		</div>
		@if($errors->has('price'))
			@foreach($errors->get('price') as $priceError)
				<div class="alert alert-block alert-danger fade in">
	              <button data-dismiss="alert" class="close close-sm" type="button">
	                <i class="icon-remove"></i>
	              </button>
	              <strong>Ошибка!</strong> {{$priceError}}
	            </div>
	    	@endforeach
   		@endif
	</div>
</div>

<div class="form-group">
	<label class="control-label col-lg-2">Цена со скидкой</label>
	<div class="col-lg-10">
		<div class="input-group m-bot15">
			@if(isset($item))
				{{ Form::input('text', 'sale', $item->sale, ['class' => 'form-control']) }}
			@else
				{{ Form::input('text', 'sale', '', ['class' => 'form-control']) }}
			@endif
			<span class="input-group-addon">грн.</span>
		</div>
		@if($errors->has('sale'))
			@foreach($errors->get('sale') as $saleError)
				<div class="alert alert-block alert-danger fade in">
		          <button data-dismiss="alert" class="close close-sm" type="button">
		            <i class="icon-remove"></i>
		          </button>
		          <strong>Ошибка!</strong> {{$saleError}}
		        </div>
			@endforeach
   		@endif
	</div>
</div>

<div class="form-group">
	<label class="control-label col-lg-2">Вес, объем, количество</label>
	<div class="col-lg-2">
		<div class="input-group m-bot15">
			@if(isset($item))
				{{ Form::input('text', 'weight', $item->weight, ['class' => 'form-control']) }}
			@else
				{{ Form::input('text', 'weight', '', ['class' => 'form-control']) }}
			@endif
		</div>
		@if($errors->has('weight'))
			@foreach($errors->get('weight') as $weightError)
				<div class="alert alert-block alert-danger fade in">
		          <button data-dismiss="alert" class="close close-sm" type="button">
		            <i class="icon-remove"></i>
		          </button>
		          <strong>Ошибка!</strong> {{$weightError}}
		        </div>
			@endforeach
   		@endif
	</div>
	<div class="col-lg-2">
		<select class="form-control m-bot15  pull-left" name="weight_type">
			<option @if(!isset($item))selected @endif disabled>- Тип -</option>
			<option value="гр." @if(isset($item) && $item->weight_type == 'гр.')selected @endif>гр.</option>
			<option value="мл." @if(isset($item) && $item->weight_type == 'мл.')selected @endif>мл.</option>
			<option value="шт." @if(isset($item) && $item->weight_type == 'шт.')selected @endif>шт.</option>
		</select>
	</div>
</div>

{{-- <div class="form-group">
	<label class="control-label col-lg-2">Количество на складе</label>
	<div class="col-lg-10">
		<div class="input-group m-bot15"> --}}
			@if(isset($item) && $item->on_store !== 0)
				{{ Form::input('hidden', 'on_store', $item->on_store, ['class' => 'form-control']) }}
			@else
				{{ Form::input('hidden', 'on_store', 9999999, ['class' => 'form-control']) }}
			@endif
			{{-- <span class="input-group-addon">шт.</span>
		</div> --}}
		@if($errors->has('on_store'))
			@foreach($errors->get('on_store') as $onStoreError)
				<div class="alert alert-block alert-danger fade in">
	              <button data-dismiss="alert" class="close close-sm" type="button">
	                <i class="icon-remove"></i>
	              </button>
	              <strong>Ошибка!</strong> {{$onStoreError}}
	            </div>
	    	@endforeach
   		@endif
	{{-- </div>
</div> --}}

<div class="form-group">
	<label class="col-sm-2 control-label col-sm-2">Описание товара</label>
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
	<label class="control-label col-md-2">Обложка товара</label>
	<div class="col-md-10">
		<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="max-width: 400px; max-height: 300px; line-height: 20px;">
					<img src="@if(isset($item)){{ $item->cover }} @endif" alt="">
				</div>
			<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 400px; max-height: 300px;"></div>
			<div>
				<span class="btn btn-white btn-file">
					<span class="fileupload-new"><i class="icon-paper-clip"></i> Изменить обложку товара</span>
					<span class="fileupload-exists"><i class="icon-undo"></i> Другое</span>
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
	              <strong>Ошибка!</strong> {{$coverError}}
	            </div>
	    	@endforeach
    	@endif
	</div>
</div>

<div class="form-group">
	<label class="control-label col-md-2">Обложка товара (мини)</label>
	<div class="col-md-10">
		<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="max-width: 400px; max-height: 300px; line-height: 20px;">
					<img src="@if(isset($item)){{ $item->cover_thumb }} @endif" alt="">
				</div>
			<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 400px; max-height: 300px;"></div>
			<div>
				<span class="btn btn-white btn-file">
					<span class="fileupload-new"><i class="icon-paper-clip"></i> Изменить обложку товара (мини)</span>
					<span class="fileupload-exists"><i class="icon-undo"></i> Другое</span>
					<input type="file" name="thumb_cover" class="default">
				</span>
			</div>
		</div>
		@if($errors->has('thumb_cover'))
			@foreach($errors->get('thumb_cover') as $thumbCoverError)
				<div class="alert alert-block alert-danger fade in">
	              <button data-dismiss="alert" class="close close-sm" type="button">
	                <i class="icon-remove"></i>
	              </button>
	              <strong>Ошибка!</strong> {{$thumbCoverError}}
	            </div>
	    	@endforeach
    	@endif
	</div>
</div>


<div class="form-group">
	<label class="control-label col-md-2">Топ-10</label>
		<div class="col-sm-10">
                <div class="switch switch-square" data-on-label="<i class=' icon-ok'></i>" data-off-label="<i class='icon-remove'></i>">
                    <input type="checkbox" name="top" value="1" @if(isset($item->on_top) && $item->on_top == 1) checked @endif />
               </div>
		</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label col-lg-2">Порядковый номер в Топ-10</label>
	<div class="col-lg-10">
		<select class="form-control m-bot15" name="top_rank">
				<option @if(isset($item) && $item->top_rank == 0)selected @endif>- Порядковый номер -</option>
			@for($i = 1; $i < 11; $i++)
				<option value="{{ $i }}" @if(isset($item) && $item->top_rank == $i) selected @endif>{{ $i }}</option>
			@endfor
		</select>
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