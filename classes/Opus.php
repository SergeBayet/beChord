<?php

class Opus extends CompoObject {
	static $availableComponents = array('title' => 'xs:string',
																			'opus' => 'opus',
																			'opus-link' => 'opus-link',
																			'score' => 'score'
																			);
	static $availableOptions = array('version' => 'xs:string');
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