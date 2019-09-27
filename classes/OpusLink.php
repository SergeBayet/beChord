<?php

class OpusLink extends CompoObject {
	
	
	static $availableOptions = array('xlink:href' => 'xs:anyURI',
																	 'xlink:type' => 'xs:NMTOKEN',
																	 'xlink:role' => 'xs:token',
																	 'xlink:title' => 'xs:token',
																	 'xlink:show' => 'xs:NMTOKEN',
																	 'xlink:actuate' => 'xs:NMTOKEN',
																	 'new-page' => 'yes-no'
																	);
	function __construct($options = array()) {
		
		$this->options = $options;
		$this->check();
	}

}