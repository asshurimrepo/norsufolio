<div class="featured-text center">

<h3><i class="fa fa-list"></i> My Recent Projects </h3>
<a class="form-button  signup-button-social form-button-default auto-width" href="{{ route('user.project.create') }}">Upload</a>

</div>

<div class="container-fluid">

<div class="row">

    @forelse(Auth::user()->projects()->get() as $project)
          @include('users.partials._project_thumb_single')
    @empty

            <div class="center no-project-listed">

                <h3 class="text-muted">Dude! Add your own first project now and be Awesome!</h3>

            </div>

    @endforelse

</div>

</div>