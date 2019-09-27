<?php

class Barre extends CompoObject {
	
	
	static $availableOptions = array('type' => 'start-stop',
																	'color' => 'color');
	function __construct($options = array()) {
		
		$this->options = $options;
		$this->check();
	}

}