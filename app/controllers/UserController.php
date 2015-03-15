<?php

	use Laracasts\Commander\CommanderTrait;

	class UserController extends \BaseController {

		use CommanderTrait;

		/**
		 * Display a listing of the resource.
		 *
		 * @return Response
		 */
		public function index()
		{
			$this->data['projects'] = Auth::user()->projects()->orderBy( 'id', 'desc' )->get();


			return View::make( 'users.index', $this->data );
		}


		/**
		 * Show the form for creating a new resource.
		 *
		 * @return Response
		 */
		public function create()
		{
			return View::make( 'users.create', $this->data );
		}


		/**
		 * Store a newly created resource in storage.
		 *
		 * @return Response
		 */
		public function store()
		{
			$input             = Input::all();
			$input['password'] = Hash::make( $input['password'] );

			$user = User::create( $input );
			$user->profile()->create( $input );

			return Redirect::route( 'users.welcome' );

		}


		/**
		 * Display the specified resource.
		 *
		 * @param  int $id
		 *
		 * @return Response
		 */
		public function show( $id )
		{
		}


		/**
		 * Show the form for editing the specified resource.
		 * @return Response
		 */
		public function editProfile()
		{
			$this->data['title'] = 'Edit Profile';

			return View::make( 'users.edit_profile', $this->data );
		}


		/**
		 * Update the specified resource in storage.
		 *
		 * @param User $user
		 *
		 * @return Response
		 */
		public function update( User $user )
		{
			$user->update( Input::all() );
			$profile = $user->profile;

			if ( ! $profile )
			{
				$profile->create( Input::all() );
			}

			$profile->update( Input::all() );

			return Redirect::back()->with( 'message', 'Your changes have been saved.' );
		}


		public function updateProfileImage()
		{
			Auth::user()->update( [ 'avatar' => Input::get( 'data.0.url' ) ] );

			return Auth::user();
		}


		/**
		 * Remove the specified resource from storage.
		 *
		 * @param  int $id
		 *
		 * @return Response
		 */
		public function destroy( $id )
		{
			//
		}


		/**
		 * @return \Illuminate\View\View
		 */
		public function welcome()
		{

			return View::make( 'users.welcome', $this->data );

		}

		public function follow( User $user )
		{
			$user->followers()->create( [ 'followee_id' => Auth::user()->id ] );

			return $user;
		}

		public function unfollow( User $user )
		{
			$user->followers()->where('followee_id', Auth::user()->id)->delete();
		}


	}
