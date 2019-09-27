<?php

class SystemLayout extends CompoObject {
	static $availableComponents = array('system-margins' => 'system-margins',
																			'system-distance' => 'tenths',
																			'top-system-distance' => 'tenths',
																			'system-dividers' => 'system-dividers'
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