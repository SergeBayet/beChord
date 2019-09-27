<?php

class SystemMargins extends CompoObject {
	static $availableComponents = array('left-margin' => 'tenths',
																			'right-margin' => 'tenths'
																			
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