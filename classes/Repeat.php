<?php

class Repeat extends CompoObject {
	
	
	static $availableOptions = array('direction' => 'backward-forward',
																		'times' => 'xs:nonNegativeNumber',
																		'winged' => 'winged');
	
	function __construct($options = array()) {
		
		$this->options = $options;
		$this->check();
	}
}