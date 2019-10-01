<?php

class Bass extends CompoObject {
	static $availableComponents = array('bass-step' => 'bass-step',
																			'bass-alter' => 'bass-alter'
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