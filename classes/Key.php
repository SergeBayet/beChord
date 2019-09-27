<?php

class Key extends CompoObject {
	
	static $availableComponents = array('key-step' => 'step',
																			'key-alter' => 'semitones',
																			'key-accidental' => 'accidental-value',
																			'cancel' => 'cancel',
																			'fifths' => 'fifths',
																			'mode' => 'mode',
																			'key-octave' => 'key-octave');
	static $availableOptions = array('number' => 'staff-number',
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