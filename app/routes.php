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




	//	Project
	/*
	 * @route project/{project_id}
	 * @name project.show
	 * @uses ProjectsController@showProject
	 * */
	Route::get( 'project/{project_id}', [
		'as'   => 'project.show',
		'uses' => 'ProjectsController@showProject'
	] );

	Route::model('project_id', 'Project');


	Route::group( [ 'before' => 'auth' ], function ()
	{
		/*
		 * @route project-up/{project_id}
		 * @name project.up
		 * @uses ProjectsController@upProject
		 * */
		Route::post('project-up/{project_id}', [
			'as'   => 'project.up',
			'uses' => 'ProjectsController@upProject'
		]);
	});

	Route::group( [ 'before' => '' ], function ()
	{

		/*
		 * @route user/edit-profile
		 * @name user.edit-profile
		 * @uses UserController@editProfile
		 * */
		Route::get( 'user/edit-profile', [
			'as'   => 'user.edit-profile',
			'uses' => 'UserController@editProfile'
		] );

		/*
		 * @route user
		 * @uses UserController
		 * */
			Route::resource( 'user', 'UserController' );

		/*
		 * @route uploader
		 * @name uploader
		 * @uses UploadController@run
		 * */
		Route::any('profile/upload', [
			'as'   => 'uploader.profile',
			'uses' => 'UploaderController@uploadProfile'
		]);
		
		/*
		 * @route user/update-profile-image
		 * @name user.update-profile-image
		 * @uses UserController@updateProfileImage
		 * */
		Route::post('user/update-profile-image', [
		    'as'   => 'user.update-profile-image',
		    'uses' => 'UserController@updateProfileImage'
		]);

		/*
		 * @route user/project
		 * @uses ProjectsController
		 * */
		Route::resource( 'user.project', 'ProjectsController' );

		//	Route Bind
		Route::model( 'user', 'User' );
	} );




