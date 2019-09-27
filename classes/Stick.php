<?php

class Stick extends CompoObject {
	static $availableComponents = array('stick-type' => 'stick-type',
																			'stick-material' => 'stick-material');
	static $availableOptions = array('tip' => 'tip-direction');
	function __construct($components, $options = array()) {
		$this->components = $components;
		$this->options = $options;
		$this->check();
	}

}