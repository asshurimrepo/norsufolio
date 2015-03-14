<?php  namespace Norsu\Accounts\Providers\Contracts;

interface Provider {

	public function authorized();

	public function login( $code );

}