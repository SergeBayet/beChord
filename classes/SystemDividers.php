<?php

class SystemDividers extends CompoObject {
	static $availableComponents = array('left-divider' => 'empty-print-object-style-align',
																			'right-divider' => 'empty-print-object-style-align'
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