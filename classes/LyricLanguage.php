<?php

class LyricLanguage extends CompoObject {
	
	
	static $availableOptions = array('number' => 'xs:NMTOKEN',
																	 'name' => 'xs:token',
																	 'xml:lang' => 'xs:anySimpleType'
																	 );
	function __construct($options = array()) {
		
		$this->options = $options;
		$this->check();
	}

}