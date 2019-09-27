<?php

class Distance extends CompoObject {
	static $availableComponents = array();
	static $availableOptions = array('type' => 'distance-type');
	function __construct($options = array()) {
		
		$this->options = $options;
		$this->check();
	}

}