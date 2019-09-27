<?php

class Credit extends CompoObject {
	static $availableComponents = array('credit-type' => 'xs:string',
																			'link' => 'link',
																			'bookmark' => 'bookmark',
																			'credit-image' => 'image',
																			'credit-words' => 'formatted-text'
																			);
	static $availableOptions = array('page' => 'xs:positiveInteger');
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