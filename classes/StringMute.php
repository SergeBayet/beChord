<?php

class StringMute extends CompoObject {
	
	static $availableOptions = array('type' => 'on-off',
																	'default-x' => 'tenths',
																	'default-y' => 'tenths',
																	 'relative-x' => 'tenths',
																	'relative-y' => 'tenths',
																	'font-family' => 'comma-separated-text',
																	'font-size' => 'font-size',
																	'font-style' => 'font-style',
																	'font-weight' => 'font-weight',
																	'color' => 'color',
																	'halign' => 'left-center-right',
																	'valign' => 'valign');
	function __construct($options = array()) {
	
		$this->options = $options;
		$this->check();
	}
}