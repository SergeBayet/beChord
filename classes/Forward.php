<?php

class Forward extends CompoObject {
	static $availableComponents = array('duration' => 'positive-divisions',
																			'footnote' => 'formatted-text',
																			'level' => 'level',
																			'voice' => 'xs:string',
																			'staff' => 'xs:positiveInteger'
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