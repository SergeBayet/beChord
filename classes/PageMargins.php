<?php

class PageMargins extends CompoObject {
	static $availableComponents = array('left-margin' => 'tenths',
																			'right-margin' => 'tenths',
																			'top-margin' => 'tenths',
																			'bottom-margin' => 'tenths'
																			);
	static $availableOptions = array('type' => 'margin-type');
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