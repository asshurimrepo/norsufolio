<?php

//Link CSS
	function link_css( $path )
	{

		$path = asset( $path );

		return "<link rel=\"stylesheet\" href=\"{$path}\" />";

	}

//LINK JS
	function link_js( $path )
	{

		$path = asset( $path );

		return "<script src=\"{$path}\"></script>";

	}


//LINK Image
	function img( $path, array $attrs = [ ] )
	{

		$path       = asset( $path );
		$attributes = [ ];

		foreach ( $attrs as $attr => $value )
		{
			$attributes .= "{$attr}=\"{$value}\"";
		}

		return "<img src=\"{$path}\" {$attributes} />";

	}


	/**
	 * @param $path
	 * @param string $active_class
	 *
	 * @return string
	 */
	function set_active( $path, $active_class = 'active' )
	{
		return in_array( $path, Request::segments() ) ? $active_class : '';
	}

	/**
	 * @param $route_name
	 * @param string $active_class
	 *
	 * @return string
	 */
	function set_active_by_route($route_name, $active_class = 'active'){
		return Route::current()->getName() == $route_name ? $active_class : '';
	}