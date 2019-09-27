<?php

class Rest extends CompoObject {

	
	static $availableOptions = array('measure' => 'yes-no');
	static $availableComponents = array('display-step' => 'step',
																			'display-octave' => 'octave');
	function __construct($components, $options = array()) {
		$this->components = $components;
		$this->options = $options;
		$this->check();
	}
}