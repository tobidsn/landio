@extends('layouts.guest')
@section('content')
<hr class="invisible">
<div class="container">
    <div class="row">
        <div class="col-sm-4 col-lg-4 col-md-4"></div>
        <div class="col-sm-4 col-lg-4 col-md-4"> 
            <h2 style="text-align: center;">Masuk</h2>
            {!! Form::open(['url'=>'login', 'class'=>'']) !!} 
            
            <div class="form-group has-icon-left form-control-email {{ $errors->has('email') ? ' has-error' : '' }}">
                {!! Form::label('email', 'Alamat Email', ['class'=>'sr-only']) !!} 
                {!! Form::email('email', null, ['class'=>'form-control form-control-lg', 'placeholder'=>'Email']) !!}
                {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
            </div>

            <div class="form-group has-icon-left form-control-password {{ $errors->has('password') ? ' has-error' : '' }}">
                {!! Form::label('password', 'Password', ['class'=>'sr-only']) !!}
                
                {!! Form::password('password', ['class'=>'form-control form-control-lg', 'placeholder'=>'Password']) !!}
                {!! $errors->first('password', '<p class="help-block">:message</p>') !!} 
            </div>

            <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
            <div class="checkbox">
            <label>
            {!! Form::checkbox('remember')!!} Ingat saya
            </label>
            </div>
            </div>
            </div>

            <div class="form-group">
            <div class="">
            <button type="submit" class="btn btn-info">
            <i class="fa fa-btn fa-sign-in"></i> Login
            </button>

          {{--   <a class="btn btn-block" href="{{ url('/password/reset') }}">Lupa password ?</a>
            <a href="#" class="btn btn-social btn-block bg-facebook">
                <span class="icon-facebook"></span> Login with Facebook
            </a>
            <a href="#" class="btn btn-social btn-block bg-google">
                <span class="icon-google"></span> Login with Google
            </a> --}}
            </div>
            </div>
            {!! Form::close() !!}
            <hr class="invisible">
         
        
          <!-- Buttons
          ================================================== --> 
          <hr class="invisible">
        </div>
        <div class="col-sm-4 col-lg-4 col-md-4"></div>
        <div class="clearfix hidden-md-up"></div> 
    </div>
</div>
@endsection
