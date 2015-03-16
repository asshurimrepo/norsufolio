<html ng-app>
<head>
    <meta charset="UTF-8">
    <title>@yield('title', $title)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('icons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('icons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('icons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('icons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('icons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('icons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('icons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('icons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('icons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('icons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('icons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('icons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('icons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('icons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('icons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    {{--Jquery--}}
    {{ link_js('assets/jquery/jquery.min.js') }}

    {{--Angular--}}
    {{ link_js('assets/angular/angular.js') }}

    {{--Bootstrap--}}
    {{ link_css('assets/bootstrap/css/bootstrap.min.css') }}
    {{ link_js('assets/bootstrap/js/bootstrap.min.js') }}


    {{--FontAwesome--}}
    {{ link_css('assets/fontawesome/css/font-awesome.css') }}

    {{--Style--}}
    {{ link_css('assets/css/style.css') }}

    {{ link_css('assets/css/behance.css') }}

    @yield('header')

</head>
<body @yield('bodyAtt')>

@section('navbar')
    @include('partials._navbar')
@show

@yield('content')

@yield('footer')
</body>
</html>