<?php

class Tie extends CompoObject {
	
	static $availableOptions = array('type' => 'start-stop',
																	 'time-only' => 'time-only');
	function __construct($options = array()) {
		$this->options= $options;
		$this->check();
	}
	
}