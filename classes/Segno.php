<?php

class Segno extends CompoObject {
	
	
	static $availableOptions = array('default-x' => 'tenths',
																	 'default-y' => 'tenths',
																	 'relative-x' => 'tenths',
																	 'relative-y' => 'tenths',
																	 'font-family' => 'comma-separated-text',
																	 'font-style' => 'font-style',
																	 'font-weight' => 'font-weight',
																	 'halign' => 'left-center-right',
																	 'valign' => 'valign',
																	 'color' => 'color'
																	 );
	function __construct($options = array()) {
		
		$this->options = $options;
		$this->check();
	}

}