@extends('master')

@section('header')
    {{ link_css('assets/css/login.css') }}
@stop

@section('content')

    <div class="container" id="login-block">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
                <h3 class="animated bounceInDown">Login</h3>
                <div class="login-box clearfix animated flipInY">
                    <div class="login-logo">
                        <a href="{{ route('index') }}">
                            <img src="{{ asset('images/logo.jpg') }}" alt="NFOLIO" width="120px" />
                        </a>
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


                        {{ Form::open(['route' => 'session.make']) }}
                            {{ Form::text('id_number', Form::old('id_number'), ['placeholder'=>'ID Number', 'required']) }}
                            {{ Form::password('password', ['placeholder' => 'Password', 'required']) }}
                            <button type="submit" class="btn btn-red">Login</button>
                        {{ Form::close() }}

                        <div class="login-links">
                            <a href="#">
                                Forgot password?
                            </a>
                            <br>
                            <a href="{{ route('user.create') }}">
                                Don't have an account? <strong>Sign Up</strong>
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