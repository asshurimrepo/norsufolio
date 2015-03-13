@extends('users.user_master')


@section('header')
    @parent
    {{ link_css('assets/css/form-animate.css') }}
    {{ link_css('assets/users/css/edit.css') }}

@stop

@section('body')

    @include('users.partials._back_to_profile')


<div class="container away-from-top edit-panel">
    <div class="row">
    {{ Form::open(['route' => 'user.project.store', 'class'=>'col-md-5 col-md-offset-3 go-right', 'files'=>true]) }}
			<h2 class="center">Add a Project</h2>
            <p class="lead text-center">Great! Just upload your project and be famous!</p>

		<div class="form-group">
		    {{ Form::text('name', Form::old('name'), ['class'=>'form-control', 'required']) }}
		    {{ Form::label('name', 'Project Name') }}
		</div>

		<div class="form-group">
			{{ Form::textarea('description', Form::old('name'), ['class'=>'form-control', 'required']) }}
            {{ Form::label('description', 'Project Description') }}
		</div>

		<div class="form-group">
		     <p>Choose Image</p>
            {{ Form::file('image',  ['class'=>'form-control', 'required']) }}
        </div>

             <div class="right">{{ Form::button('Submit your Awesomeness', ['class'=>' form-button  signup-button-social form-button-default auto-width btn-primary', 'type'=>'submit']) }}</div>



	{{ Form::close() }}

	</div>
</div>


@stop