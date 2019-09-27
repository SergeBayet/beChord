<?php

class Time extends CompoObject {
	
	static $availableComponents = array('senza-misura' => 'xs:string',
																			'beats' => 'xs:string',
																			'beat-type' => 'xs:string',
																			'interchangeable' => 'interchangeable');
	static $availableOptions = array('symbol' => 'time-symbol',
																	'separator' =>'time-separator',
																'number' => 'staff-number',
																'default-x' => 'tenths',
																'default-y' => 'tenths',
																'relative-x' => 'tenths',
																'relative-y' => 'tenths',
																'font-family' => 'comma-separated-text',
																'font-style' => 'font-style',
																'font-size' => 'font-size',
																'font-weight' => 'font-weight',
																'color' => 'color',
																'halign' => 'left-center-right',
																'valign' =>'valign');
	function __construct($components, $options = array()) {
		$this->components = $components;
		$this->options = $options;
		$this->check();
	}

}