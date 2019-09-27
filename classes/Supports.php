<?php

class Supports extends CompoObject {
	
	static $availableOptions = array('type' => 'yes-no',
																	 'element' => 'xs:NMTOKEN',
																	 'attribute' => 'xs:NMTOKEN',
																	'value' => 'xs:token');
	function __construct($options = array()) {
	
		$this->options = $options;
		$this->check();
	}

}