<?php

class Accord extends CompoObject {
	
	
	static $availableOptions = array('string' => 'string-number');
	static $availableComponents = array('tuning-step' => 'step',
																			'tuning-alter' => 'semitones',
																			'tuning-octave' => 'octave');
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