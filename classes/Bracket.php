<?php

class Bracket extends CompoObject {
	
	
	static $availableOptions = array('type' => 'start-stop-continue',
																	'number' => 'number-level',
																	'line-end' => 'line-end',
																	'end-length' => 'tenths',
																	'line-type' => 'line-type',
																	'dash-length' => 'tenths',
																	'space-length' => 'tenths',
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