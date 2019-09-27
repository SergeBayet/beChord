<?php

class Clef extends CompoObject {
	
	static $availableComponents = array('sign' => 'clef-sign',
																			'line' => 'staff-line',
																			'clef-octave-change' => 'xs:integer'
																			);
	static $availableOptions = array('number' => 'staff-number',
																	'additional' => 'yes-no',
																	'size' => 'symbol-size',
																	'after-barline' => 'yes-no',
																	'default-x' => 'tenths',
																	'default-y' => 'tenths',
																	'relative-x' => 'tenths',
																	'relative-y' => 'tenths',
																	'font-family' => 'comma-separated-text',
																	'font-style' => 'font-style',
																	'font-size' => 'font-size',
																	'font-weight' => 'font-weight',
																	'color' => 'color',
																	'print-object' => 'yes-no');
	function __construct($components, $options = array())
	{
		if(!is_array($components)) {
			$components = array($components);
		}
		$this->components = $components;
		$this->options = $options;
		$this->check();
	}
	
}