<?php

class Part extends CompoObject {
	static $availableComponents = array('measure' => 'xs:anyType');
	static $availableOptions = array('id' => 'xs:IDREF');
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