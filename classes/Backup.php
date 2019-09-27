<?php

class Backup extends CompoObject {
	
	static $availableComponent = array('duration' => 'positive-divisions',
																		 'footnote' => 'formatted-text',
																		 'level' => 'level');
	function __construct($components, $options = array())
	{
		$this->components = $components;
		$this->options = $options;
		$this->check();
	}

}