<?php

class OctaveShift extends CompoObject {
	
	static $availableOptions = array('type' => 'up-down-stop-continue',
																	 'number' => 'number-level',
																	 'size' => 'xs:positiveInteger',
																	 'dash-length' => 'tenths',
																	 'space-length' => 'tenths',
																	'default-x' => 'tenths',
																	'default-y' => 'tenths',
																	 'relative-x' => 'tenths',
																	'relative-y' => 'tenths',
																	'font-family' => 'comma-separated-text',
																	'font-size' => 'font-size',
																	'font-style' => 'font-style',
																	'font-weight' => 'font-weight',
																	'color' => 'color');
	function __construct($components, $options = array()) {
		
		$this->options = $options;
		$this->check();
	}

}