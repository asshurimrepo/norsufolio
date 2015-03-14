<?php
	session_start();

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
			return $fb_user;
		}

	}
