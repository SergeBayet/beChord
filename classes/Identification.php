<?php

class Identification extends CompoObject {
	static $availableComponents = array('creator' => 'typed-text',
																			'rights' => 'typed-text',
																			'encoding' => 'encoding',
																			'source' => 'xs:string',
																			'relation' => 'typed-text',
																			'miscellaneous' => 'miscellaneous'
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