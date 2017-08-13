@extends('layouts.guest')

@section('content')
<hr class="invisible">
<div class="container">
    <div class="row">

            <div class="col-sm-4 col-lg-4 col-md-4"></div>
                <div class="col-sm-4 col-lg-4 col-md-4">
                <h2 style="text-align: center;">Register</h2>
                <div class="">
                    {!! Form::open(['url'=>'/register', 'class'=>'']) !!}
                        <div class="form-group has-icon-left form-control-name {{ $errors->has('name') ? ' has-error' : '' }}">
                        
                        {!! Form::label('name', 'Nama', ['class'=>'sr-only']) !!}
                        {!! Form::text('name', null, ['class'=>'form-control form-control-lg', 'placeholder'=>'Masukan Nama']) !!}
                        {!! $errors->first('name', '<p class="help-block">:message</p>') !!} 

                        </div>

                        <div class="form-group has-icon-left form-control-email{{ $errors->has('email') ? ' has-error' : '' }}">
                        {!! Form::label('email', 'Alamat Email', ['class'=>'sr-only']) !!}
                        <div class="">
                        {!! Form::email('email', null, ['class'=>'form-control form-control-lg', 'placeholder'=>'Masukan Email']) !!}
                        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                        </div>

                        </div>
                        <div class="form-group has-icon-left form-control-password {{ $errors->has('password') ? ' has-error' : '' }}">
                        {!! Form::label('password', 'Password', ['class'=>'sr-only']) !!}
                        
                        <div class="">
                        {!! Form::password('password', ['class'=>'form-control form-control-lg','placeholder'=>'Masukan Password']) !!}
                        {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                        </div>

                        </div>
                        <div class="form-group has-icon-left form-control-password {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        {!! Form::label('password_confirmation', 'Konfirmasi Password', ['class'=>'sr-only']) !!}
                        <div class="">

                        {!! Form::password('password_confirmation', ['class'=>'form-control form-control-lg', 'placeholder'=>'Konfirmasi Password']) !!}
                        {!! $errors->first('password_confirmation', '<p class="help-block">:message</p>') !!}
                        </div>
                        </div>
                        <div class="form-group">
                        <div class="">
                        <button type="submit" class="btn btn-primary btn-block">
                        <i class="fa fa-btn fa-user"></i> Daftar
                        </button>
                      {{--    <a href="#" class="btn btn-social btn-block bg-facebook">
                            <span class="icon-facebook"></span> Daftar dengan Facebook
                        </a>
                        <a href="#" class="btn btn-social btn-block bg-google">
                            <span class="icon-google"></span> Daftar dengan Google
                        </a>       --}}
                        </div>
                        </div>
                        {!! Form::close() !!}
                </div>
            </div>
            <div class="col-sm-4 col-lg-4 col-md-4"></div>
    </div>
</div>
@endsection
