<?php

/**
*------------------------------------------------------------------
*	Project:	tConvert - A simple PHP unit converter class.
*	Author:		Taner Tuncer (@tankotun)
*	Version:	1.0
*	Homepage:	https://github.com/tanertuncer/tConverter
*	Created:	26.Oct.2014
*------------------------------------------------------------------
*/

class tConverter extends tConverterException {


	/**
	* Units Array
	*/
	private $units = array(

		# length unit array
		'length'	=> array(
			'pm'		=> 0.000000000001,	// Pikometre
			'nm'		=> 0.000000001,		// Nanometre
			'mm'		=> 0.001,		// Milimetre
			'cm'		=> 0.01,		// Santimetre
			'dm'		=> 0.1,			// Desimetre
			'm'		=> 1,			// Metre
			'dam'		=> 10,			// Dekametre
			'hm'		=> 100,			// Hektometre
			'km'		=> 1000,		// Kilometre
			'gm'		=> 1000000000,		// Gigametre
			'tm'		=> 1000000000000	// Terametre
		),

		# weight unit array
		'weight'	=> array(
			'mg'		=> 0.001,		// Miligram
			'g'		=> 1,			// Gram
			'kg'		=> 1000,		// Kilogram
			'ton'		=> 1000000		// Ton
		)

	);


	// Ingore Constructor.
	public function __construct () {}


	/**
	* Convert Method
	* @param from, array
	* @param to, string
	*/
	public function convert ($unit_type, array $from, $to) {

		// Check: empty variables
		if(!$from[0] || !$from[1] || !$to)
			throw new tConverterException('invalid');

		// Check: is numeric
		if(!is_numeric($from[0]))
			throw new tConverterException('not_numeric');	


		// If everything is ok, return.
		return $from[0] * $this->units[$unit_type][$from[1]] / $this->units[$unit_type][$to];
			
	}

}


/**
* Exception Class of tConverter
*/
class tConverterException extends Exception {

	/**
	* @param type
	*/
	public function __construct ($type) {

		switch ($type) {

			case "not_numeric":
				echo '<strong>tConverter Class: </strong>Please, enter a number!';
			break;

			case "invalid":
				echo '<strong>tConverter Class: </strong>Please, do not pass empty.';
			break;

		}
	}
}
