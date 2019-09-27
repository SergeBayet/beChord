<?php

class StaffLayout extends CompoObject {
	static $availableComponents = array('staff-distance' => 'tenths'
																			);
	static $availableOptions = array('number' => 'staff-number');
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