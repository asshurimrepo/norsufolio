<?php

	/*
	 * @route /
	 * @name index
	 * @uses HomeController@index
	 * */
	Route::get( '/', [
		'as'   => 'index',
		'uses' => 'HomeController@index'
	] );

	/*
	 * @route user/welcome
	 * @name user.welcome
	 * @uses UserController@welcome
	 * */
	Route::get( 'user/welcome', [
		'as'   => 'users.welcome',
		'uses' => 'UserController@welcome'
	] );


//Sessions

	/*
	 * @route login
	 * @name login
	 * @uses SessionsController@login
	 * */
	Route::get( 'login', [
		'as'   => 'login',
		'uses' => 'SessionsController@create'
	] );

	/*
	 * @route logout
	 * @name logout
	 * @uses SessionsController@destroy
	 * */
	Route::get( 'logout', [
		'as'   => 'logout',
		'uses' => 'SessionsController@destroy'
	] );


	/*
	 * @route login
	 * @name session.make
	 * @uses SessionsController@make
	 * */
	Route::post( 'login', [
		'as'   => 'session.make',
		'uses' => 'SessionsController@make'
	] );

	/*
	 * @route user/edit-profile
	 * @name user.edit-profile
	 * @uses UserController@editProfile
	 * */
	Route::get( 'user/edit-profile', [
		'as'   => 'user.edit-profile',
		'uses' => 'UserController@editProfile'
	] );


	//Resource

	Route::group( [ 'before' => 'auth' ], function ()
	{
		/*
		 * @route user
		 * @uses UserController
		 * */
		Route::resource( 'user', 'UserController' );


		/*
		 * @route user/project
		 * @uses ProjectsController
		 * */
		Route::resource( 'user.project', 'ProjectsController' );
	} );


//	Route Bind
	Route::model( 'user', 'User' );

