<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
{!! Form::label('name', 'Name', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('name', null, ['class'=>'form-control']) !!}
		{!! $errors->first('name', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group {!! $errors->has('category_id') ? 'has-error' : '' !!}">
	{!! Form::label('category_id', 'Category', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::select('category_id', [''=>'']+App\Category::pluck('name','id')->all(), null, [
			'class'=>'js-selectize',
		'placeholder' => 'Category']) !!}
		{!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
	{!! Form::label('price', 'Price', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::number('price', null, ['class'=>'form-control', 'min'=>1]) !!}
		{!! $errors->first('price', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('link') ? ' has-error' : '' }}">
{!! Form::label('link', 'Link', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('link', null, ['class'=>'form-control']) !!}
		{!! $errors->first('link', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('short_description') ? ' has-error' : '' }}">
{!! Form::label('short_description', 'Short Description', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::textarea('short_description', null, ['class'=>'form-control', 'style'=>'height: 97px;']) !!}
		{!! $errors->first('short_description', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group {!! $errors->has('status') ? 'has-error' : '' !!}">
	{!! Form::label('status', 'Publish', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4"> 
		{!! Form::select('status', ['Y' => 'Yes', 'N' => 'No'], null, ['class' => 'js-selectize','placeholder' => 'Status...'])!!}
		{!! $errors->first('status', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('cover') ? ' has-error' : '' }}">
	{!! Form::label('cover', 'Cover', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::file('cover') !!}
		@if (isset($product) && $product->cover)
		</br>
		<p>
			{!! Html::image(asset('img/'.$product->cover), null, ['class'=>'img-rounded img-responsive']) !!}
		</p>
		@endif
		{!! $errors->first('cover', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
{!! Form::label('description', 'Description', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-9 landio">
		{!! Form::textarea('description', null, ['class'=>'form-control', 'id'=>'summernote',]) !!}
		{!! $errors->first('description', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>
 
<script>
	$(document).ready(function() {
	    $('#summernote').summernote();
	});
</script>