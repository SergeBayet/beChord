<?php

class MidiDevice extends CompoObject {
	static $availableComponents = array();
	static $availableOptions = array('port' => 'midi-16',
																	 'id' => 'xs:IDREF');
	function __construct($options = array()) {
		if(!is_array($components))
		{
			$components = array($components);
		}
		$this->components = $components;
		$this->options = $options;
		$this->check();
	}
}