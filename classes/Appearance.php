<?php

class Appearance extends CompoObject {
	static $availableComponents = array('line-width' => 'tenths',
																			'note-size' => 'note-size',
																			'distance' => 'distance',
																			'other-appearance' => 'other-appearance'
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