@extends('master')

@section('header')
    {{ link_css('assets/css/login.css') }}
@stop

@section('content')

    <div class="container  away-from-top" id="login-block">
        <div class=" col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
            <div class="login-box clearfix animated flipInY center" style="padding: 10px">
                <h2>Your just one step ahead further to become a legend.</h2>

                <a class="btn btn-lg  btn-red" href="{{ route('login') }}" >SING IN!</a>
            </div>

        </div>
    </div>

@stop