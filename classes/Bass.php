<?php

class Bass extends CompoObject {
	static $availableComponents = array('bass-step' => 'root-step',
																			'bass-alter' => 'root-alter'
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