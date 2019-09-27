<?php

class TimeModification extends CompoObject {
	
	static $availableComponents = array('actual-notes' => 'xs:nonNegativeInteger',
																			'normal-notes' => 'xs:nonNegativeInteger',
																			'normal-type' => 'note-type-value',
																			'normal-dot' => 'empty');
	static $availableOptions = array();
	function __construct($components, $options = array())
	{
		$this->components = $components;
		$this->options = $options;
		$this->check();
	}
}