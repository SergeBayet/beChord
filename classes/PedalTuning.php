<?php

class PedalTuning extends CompoObject {
	static $availableComponents = array('pedal-step' => 'step',
																			'pedal-alter' => 'semitones'
																			);
	static $availableOptions = array();
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