<?php

class PartSymbol extends CompoObject {
	static $availableComponents = array();
	static $availableOptions = array('top-staff' => 'staff-number',
																	 'bottom-staff' => 'staff-number',
																	 'default-x' => 'tenths',
																	 'default-y' => 'tenths',
																	 'relative-x' => 'tenths',
																	 'relative-y' => 'tenths',
																	 'color' => 'color');
	function __construct($options = array()) {
		
		$this->options = $options;
		$this->check();
	}

}