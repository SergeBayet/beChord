<?php

class Slash extends CompoObject {
	static $availableComponents = array('slash-type' => 'note-type-value',
																			'slash-dot' => 'empty'
																			);
	static $availableOptions = array('type' => 'start-stop',
																	 'use-dots' => 'yes-no',
																	 'use-stems' => 'yes-no');
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