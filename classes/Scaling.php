<?php

class Scaling extends CompoObject {
	static $availableComponents = array('millimeters' => 'millimeters',
																			'tenths' => 'tenths'
																			);
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