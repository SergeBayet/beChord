<?php

class Glissando extends CompoObject {
	static $availableComponents = array();
	static $availableOptions = array('type' => 'start-stop',
																		'number' => 'number-level',
																		'line-type' => 'line-type',
																		'dash-length' => 'tenths',
																		'space-length' => 'tenths',
																		'default-x' => 'tenths',
																		'default-y' => 'tenths',
																	'relative-x' => 'tenths',
																	'relative-y' => 'tenths',
																	'font-family' => 'comma-separated-text',
																	'font-style' => 'font-style',
																	'font-size' => 'font-size',
																	'font-weight' => 'font-weight',
																	'color' => 'color');
	function __construct($options = array()) {
		
		$this->options = $options;
		$this->check();
	}

}