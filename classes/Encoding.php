<?php

class Encoding extends CompoObject {
	static $availableComponents = array('encoder' => 'typed-text',
																			'encoding-date' => 'yyyy-mm-dd',
																			'encoding-description' => 'xs:string',
																			'software' => 'xs:string',
																			'supports' => 'supports'
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