<?php

class Figure extends CompoObject {
	static $availableComponents = array('prefix' => 'style-text',
																			'figure-number' => 'style-text',
																			'suffix' => 'style-text',
																			'extend' => 'extend'
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