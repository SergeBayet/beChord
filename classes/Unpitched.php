<?php

class Unpitched extends CompoObject {
	static $availableComponents = array('display-step' => 'step',
																			'display-octave' => 'octave');
	static $availableOptions = array();
	function __construct($components, $options = array()) {
		$this->components = $components;
		$this->options = $options;
		$this->check();
	}
}