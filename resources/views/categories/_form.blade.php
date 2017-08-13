<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
	{!! Form::label('name', 'Nama', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('name', null, ['class'=>'form-control']) !!}
		{!! $errors->first('name', '<p class="help-block">:message</p>') !!}
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
		@if (isset($category) && $category->cover)
		</br>
		<p>
			{!! Html::image(asset('img/'.$category->cover), null, ['class'=>'img-rounded img-responsive']) !!}
		</p>
		@endif
		{!! $errors->first('cover', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>