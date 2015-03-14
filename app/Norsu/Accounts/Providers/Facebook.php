<?php  namespace Norsu\Accounts\Providers;

use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookSession;
use Facebook\GraphUser;
use Facebook\FacebookRequest;
use Norsu\Accounts\Providers\Contracts\Provider as ProviderInterface;

class Facebook extends Provider implements ProviderInterface {

	/**
	 * @var FacebookRedirectLoginHelper
	 */
	private $fb_login_helper;

	/**
	 *Initialized Facebook Login Class
	 */
	public function __construct()
	{
		FacebookSession::setDefaultApplication( '1379913132330593', '647b1ba23cb4ee145ab20b9b890ca88a' );
		$this->fb_login_helper = new FacebookRedirectLoginHelper( route( 'fb.login' ) );

	}

	/**
	 * @param $code
	 *
	 * @return array
	 */
	public function login( $code )
	{
		return $this->getGraphUser( $this->getSession() )->asArray();
	}

	/**
	 * @param $session
	 *
	 * @return mixed
	 * @throws \Facebook\FacebookRequestException
	 */
	protected function getGraphUser( $session )
	{
		return ( new FacebookRequest( $session, 'GET', '/me' ) )->execute()->getGraphObject( GraphUser::className() );
	}

	/**
	 * @return FacebookSession|null
	 */
	protected function getSession()
	{
		return $this->fb_login_helper->getSessionFromRedirect();
	}

	/**
	 * @return string
	 */
	protected function getAuthorizationUrl()
	{
		return $this->fb_login_helper->getLoginUrl( [ 'scope' => 'email' ] );
	}
}