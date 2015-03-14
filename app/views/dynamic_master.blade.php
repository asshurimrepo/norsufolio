@extends(Auth::check() ? 'users.user_master' : 'master')

@section(Auth::check() ? 'body' : 'content')

    @yield('binder')

@stop