<?php

class Miscellaneous extends CompoObject {
	static $availableComponents = array('miscellaneous-field' => 'miscellaneous-field');
	static $availableOptions = array();
	function __construct($components, $options = array()) {
		if(!is_array($components))
		{
			$components = array($components);
		}
		$this->components = $components;
		$this->options = $options;
		$this->check();
	}

}