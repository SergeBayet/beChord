<?php

class Transpose extends CompoObject {
	
	static $availableComponents = array('diatonic' => 'xs:integer',
																			'chromatic' => 'semitones',
																			'octave-change' => 'xs:integer',
																			'double' => 'empty');
	static $availableOptions = array('number' => 'staff-number');
	function __construct($components, $options = array()) {
		if(!is_array($components))
		{
			$components = array($components);
		}
		$this->components = $components;
		$this->options = $options;
		$this->check();
	}
}