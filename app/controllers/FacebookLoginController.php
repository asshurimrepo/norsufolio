<?php

	use Illuminate\Database\QueryException;
	use Norsu\Accounts\Providers\Facebook;


	class FacebookLoginController extends \BaseController {

		private $provider;

		/**
		 * @param Facebook $provider
		 */
		public function __construct( Facebook $provider )
		{
			$this->provider = $provider;
		}

		/**
		 * @return \Illuminate\Http\RedirectResponse
		 */
		public function authorized()
		{
			return $this->provider->authorized();
		}


		/**
		 * @return \Illuminate\Http\RedirectResponse
		 */
		public function login()
		{
			$fb_user = $this->provider->login( Input::get( 'code' ) );

//			return $fb_user;
			User::create( $fb_user );

			try
			{
				$fb_user['facebook_id'] = $fb_user['id'];
				$user = User::create( $fb_user );
//				$user->profile()->create( $fb_user );
				return $fb_user;
			}
			catch ( QueryException $e )
			{
				$user = User::where( 'email', $fb_user['email'] )->first();
				return $user;
			}

			Auth::login( $user );

			return Redirect::route( 'user.index' );
		}

	}
