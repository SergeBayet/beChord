<?php

class Root extends CompoObject {
	static $availableComponents = array('root-step' => 'root-step',
																			'root-alter' => 'root-alter'
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