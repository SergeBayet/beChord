<?php

class Tuplet extends CompoObject {
	
	static $availableOptions = array('type' => 'start-stop',
																		'number' => 'number-level',
																		'line-shape' => 'line-shape',
																		'bracket' => 'yes-no',
																		'show-number' => 'show-tuplet',
																		'show-type' => 'show-tuplet',
																		'default-x' => 'tenths',
																		'default-y' => 'tenths',
																	'relative-x' => 'tenths',
																	'relative-y' => 'tenths',
																		'placement' => 'above-below',
																		'color' => 'color');
	function __construct($options = array()) {
		
		$this->options = $options;
		$this->check();
	}

}