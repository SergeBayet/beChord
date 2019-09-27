<?php

class NonArpeggiate extends CompoObject {
	
	static $availableOptions = array('type' => 'top-bottom',
																		'number' => 'number-level',
																		'placement' => 'above-below',
																		'default-x' => 'tenths',
																		'default-y' => 'tenths',
																	'relative-x' => 'tenths',
																	'relative-y' => 'tenths',
																	'color' => 'color');
	function __construct($options = array()) {
		
		$this->options = $options;
		$this->check();
	}

}