<?php

class Work extends CompoObject {
	static $availableComponents = array('work-number' => 'xs:string',
																			'work-title' => 'xs:string',
																			'opus' => 'opus'
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