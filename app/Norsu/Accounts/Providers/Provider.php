<?php  namespace Norsu\Accounts\Providers;


abstract class Provider {

	public function authorized()
	{
		return \Redirect::to( $this->getAuthorizationUrl() );
	}

	protected abstract function getAuthorizationUrl();

}