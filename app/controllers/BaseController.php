<?php

class BaseController extends Controller {


	protected $data = [

		'title'    => 'Welcome to NORSU Folio powered by Behance',
		'app_name' => 'UNLINK'

	];

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout() {
		if ( ! is_null( $this->layout ) ) {
			$this->layout = View::make( $this->layout );
		}

		$this->mapDefaultData();
	}

	private function mapDefaultData()
	{
		if(Auth::check()){
			$this->data['current_user'] = Auth::user();
		}
	}

}
