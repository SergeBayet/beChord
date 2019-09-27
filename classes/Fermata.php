<?php

class Fermata extends CompoObject {
	static $availableComponents = array();
	static $availableOptions = array('type' => 'upright-inverted',
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