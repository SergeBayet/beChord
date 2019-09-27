<?php

class OtherAppearance extends CompoObject {
	static $availableComponents = array();
	static $availableOptions = array('type' => 'xs:token');
	function __construct($options = array()) {
		
		$this->options = $options;
		$this->check();
	}

}