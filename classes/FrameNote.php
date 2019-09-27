<?php

class FrameNote extends CompoObject {
	static $availableComponents = array('string' => 'string',
																			'fret' => 'fret',
																			'fingering' => 'fingering',
																			'barre' => 'barre'
																			);
	static $availableOptions = array(	);
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