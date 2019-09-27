<?php

class LyricFont extends CompoObject {
	
	
	static $availableOptions = array('number' => 'xs:NMTOKEN',
																	 'name' => 'xs:token',
																	 'font-family' => 'comma-separated-text',
																	 'font-style' => 'font-style',
																	 'font-size' => 'font-size',
																	 'font-weight' => 'font-weight'
																	 
																	 );
	function __construct($options = array()) {
		
		$this->options = $options;
		$this->check();
	}
}