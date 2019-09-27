<?php

class Link extends CompoObject {
	
	
	static $availableOptions = array('xlink:href' => 'xs:anyURI',
																	 'xlink:type' => 'xs:NMTOKEN',
																	 'xlink:role' => 'xs:token',
																	 'xlink:show' => 'xs:NMTOKEN',
																	 'xlink:actuate' => 'xs:NMTOKEN',
																	 'name' => 'xs:token',
																	 'element' => 'xs:NMTOKEN',
																	 'position' => 'xs:positiveInteger',
																	 'default-x' => 'tenths',
																	 'default-y' => 'tenths',
																	 'relative-x' => 'tenths',
																	 'relative-y' => 'tenths'
																	 );
	function __construct($options = array()) {
		
		$this->options = $options;
		$this->check();
	}
}