<?php namespace Vinelab\COuntry\Facades;

use Illuminate\Support\Facades\Facade;

Class Guide extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'country'; }

}