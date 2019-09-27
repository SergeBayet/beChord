<?php

class Wedge extends CompoObject {
	
	static $availableOptions = array('type' => 'wedge-type',
																	 'number' => 'number-level',
																	 'spread' => 'tenths',
																	 'niente' => 'yes-no',
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