<html ng-app>
<head>
    <meta charset="UTF-8">
    <title>@yield('title', $title)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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