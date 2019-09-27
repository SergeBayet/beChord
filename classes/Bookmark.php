<?php

class Bookmark extends CompoObject {
	
	
	static $availableOptions = array('id' => 'xs:ID',
																	 'name' => 'xs:token',
																	 'element' => 'xs:NMTOKEN',
																	 'position' => 'xs:positiveInteger'
																	 );
	function __construct($options = array()) {
		
		$this->options = $options;
		$this->check();
	}
}