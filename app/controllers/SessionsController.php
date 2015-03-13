<?php

class SessionsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('login', $this->data);
	}

	public function make() {

		$credentials = [
			'id_number' => Input::get('id_number'),
			'password' => Input::get('password'),
		];

		if(Auth::attempt($credentials)){
			return Redirect::route('user.index');
		}

		return Redirect::back()->withInput()->with('error', "Sorry Dude! It seems you're having trouble! \n  Try Again One more time! Hope you get it right!");

	}

	public function destroy() {
		Auth::logout();

		return Redirect::route('index');
	}


}
