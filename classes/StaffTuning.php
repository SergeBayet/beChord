<?php

class StaffTuning extends CompoObject {
	static $availableComponents = array('tuning-step' => 'step',
																			'tuning-alter' => 'semitones',
																			'tuning-octave' => 'octave'
																			);
	static $availableOptions = array('line' => 'staff-line');
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