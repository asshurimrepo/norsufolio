@extends(Auth::check() ? 'users.user_master' : 'master')


@section('content')

       <div class="container-fluid header-gradient dark-header-img">

            <div class="center">

                <h3>Showcase & Discover Norsunians</h3>

                <a class=" form-button  signup-button-social form-button-default auto-width" href="{{ route('user.create') }}">Sign Up</a>

            </div>


       </div>


       <div class="container-fluid featured-text">

            <div class="center">
                <h3> <i class="fa fa-list-alt"></i> Featured Projects</h3>
            </div>

       </div>


        <div class="container" id="featured-projects">

                <div class="row">

                   @foreach(Project::orderBy('id', 'desc')->get() as $project)

                       @include('ui.elements.cover_block')

                   @endforeach

                </div>




        </div>



@stop