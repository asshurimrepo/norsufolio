@extends('master')

@section('content')

    <div class="container away-from-top">

        <div class="row">

            <div class="col-md-7 col-md-offset-2">

                <div class="well bg-white">

                    <div class="center"><h3>Are you a Norsunian? <br /> <small>Become Awesome Now!</small></h3></div>

                    {{ Form::open(['route' => 'user.store']) }}



                            <div class="form-group">
                                {{ Form::text('id_number', Form::old('id_number'), ['class'=>'form-control', 'placeholder'=>'ID Number', 'required']) }}
                            </div>

                            <div class="form-group">
                                {{ Form::password('password', ['class'=>'form-control', 'placeholder' => 'Password', 'required']) }}
                            </div>

                            <div class="form-group">
                                {{ Form::text('name', Form::old('name'), ['class'=>'form-control', 'placeholder' => 'Name', 'required']) }}
                            </div>

                            <div class="form-group">
                                {{ Form::email('email', Form::old('email'), ['class'=>'form-control', 'placeholder' => 'Email', 'required']) }}
                            </div>


                            <div class="form-group">
                                {{ Form::text('address', Form::old('address'), ['class'=>'form-control', 'placeholder' => 'Address', 'required']) }}
                            </div>


                            <div class="right">{{ Form::submit('Become the One!', ['class'=>' form-button  signup-button-social form-button-default auto-width']) }}</div>





                    {{ Form::close() }}

                </div>

            </div>

        </div>

    </div>

@stop