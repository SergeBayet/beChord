<?php

class PerMinute extends CompoObject {
	protected $textRestriction = 'xs:string';
	static $availableComponents = array();
	static $availableOptions = array('font-family' => 'comma-separated-text',
																	 'font-size' => 'font-size',
																	 'font-style' => 'font-style',
																	 'font-weight' => 'font-weight');
	function __construct($text, $options = array()) {
		$this->text = $text;
		$this->options = $options;
		$this->check();
	}

}