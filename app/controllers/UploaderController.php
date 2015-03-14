<?php


	use Norsu\User\Uploader;

	class UploaderController extends \BaseController {

		public function uploadProfile()
		{
			if ( Input::has( 'saveProfile' ) )
			{
				$options = Input::all();

				Auth::user()->update([
					'avatar' => Input::get('data.0.url'),
				]);

				return $options;
			}

			new Uploader;
		}


	}
