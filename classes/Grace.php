<?php

class Grace extends CompoObject {
	
	
	static $availableOptions = array('steal-time-prvious' => 'percent',
																	 'steal-time-following' => 'percent',
																	 'make-time' => 'divisions',
																	 'slash' => 'yes-no');
	function __construct($options = array()) {
		$this->options = $options;
		$this->check();
	}

}