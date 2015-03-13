@extends('master')

@section('header')
    {{ link_css('assets/users/css/modal.css') }}
    {{ link_css('assets/users/css/navbar.css') }}
    {{ link_css('assets/users/css/popover.css') }}
@stop

@section('footer')
    {{ link_js('assets/users/js/popover.js') }}
@stop

@section('navbar')
    @include('users.navbar')
@stop


@section('content')

    <div class="container">@yield('body')</div>

    <br/>
    <div class="featured-text navbar-fixed-bottom">
        <p class="lead center text-muted"><small>&copy; 2014 | All rights reserved! | UPLINK</small></p>
    </div>

@stop