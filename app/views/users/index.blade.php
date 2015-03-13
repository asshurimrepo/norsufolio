@extends('users.user_master')

@section('header')
    @parent
    {{ link_css('assets/css/view.css') }}
@stop

@section('body')

    @include('users.partials._my_portfolio')

@stop