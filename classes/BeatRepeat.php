<?php

class BeatRepeat extends CompoObject {
	static $availableOptions = array('type' => 'start-stop',
																			'slashes' => 'xs:positiveInteger',
																			'use-dots' => 'yes-no'
																			);
	static $availableComponents = array('slash-type' => 'note-type-value',
																			'slash-dot' => 'empty');
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