<?php

class Degree extends CompoObject {
	static $availableComponents = array('degree-value' => 'degree-value',
																			'degree-alter' => 'degree-alter',
																			'degree-type' => 'degree-type'
																			);
	static $availableOptions = array('print-object' => 'yes-no');
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