@extends('master')

@section('header')
    {{ link_css('assets/css/login.css') }}
@stop

@section('content')

    <div class="container" id="login-block">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
                <h3 class="animated bounceInDown"><h3>Are you a Norsunian? <br /> <small>Become Awesome Now!</small></h3></h3>
                <div class="login-box clearfix animated flipInY">
                    <div class="login-logo">
                        <a href="{{ route('index') }}"><h1>{{ $app_name }}</h1></a>
                    </div>
                    <hr>
                    <div class="login-form">

                        @if(Session::has('error'))

                            <div class="alert alert-error text-danger">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <h4>Error!</h4>
                                {{ nl2br( Session::get('error') )  }}
                            </div>

                        @endif

                            {{ Form::open(['route' => 'user.store']) }}



                            <div class="form-group">
                                {{ Form::text('id_number', Form::old('id_number'), ['class'=>'form-control', 'placeholder'=>'ID Number', 'required']) }}
                            </div>

                            <div class="form-group">
                                {{ Form::password('password', ['class'=>'form-control', 'placeholder' => 'Password', 'required']) }}
                            </div>

                            <div class="form-group">
                                {{ Form::text('name', Form::old('name'), ['class'=>'form-control', 'placeholder' => 'Nickname', 'required']) }}
                            </div>

                            <div class="form-group">
                                {{ Form::text('first_name', Form::old('first_name'), ['class'=>'form-control', 'placeholder' => 'First Name', 'required']) }}
                            </div>

                            <div class="form-group">
                                {{ Form::text('last_name', Form::old('last_name'), ['class'=>'form-control', 'placeholder' => 'Last Name', 'required']) }}
                            </div>

                            <div class="form-group">
                                {{ Form::email('email', Form::old('email'), ['class'=>'form-control', 'placeholder' => 'Email', 'required']) }}
                            </div>


                            <div class="form-group">
                                {{ Form::text('address', Form::old('address'), ['class'=>'form-control', 'placeholder' => 'Address', 'required']) }}
                            </div>

                            <div class="form-group">
                                {{ Form::text('college', Form::old('college'), ['class'=>'form-control', 'placeholder' => 'College', 'required']) }}
                            </div>

                            <div class="form-group">
                                {{ Form::text('course', Form::old('course'), ['class'=>'form-control', 'placeholder' => 'Course', 'required']) }}
                            </div>

                            <button type="submit" class="btn btn-red">Signup!</button>






                            {{ Form::close() }}



                        <div class="login-links">
                            <a href="#">
                                Forgot password?
                            </a>
                            <br>
                            <a href="{{ route('session.make') }}">
                                Already have an account?  <strong>Sign In</strong>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="social-login row ">
                    <div class="fb-login col-md-12 animated flipInX">
                        <a href="{{ route('fb.auth') }}" class="btn btn-facebook btn-block"><i class="fa fa-facebook"></i> Connect with <strong>Facebook</strong></a>
                    </div>

                </div>
            </div>
        </div>
    </div>



@stop