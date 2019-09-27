<?php

class Notehead extends CompoObject {
	protected $textRestriction = 'notehead-value';
	static $availableOptions = array('filled' => 'yes-no',
																	'parentheses' => 'yes-no',
																	'font-family' => 'comma-separated-text',
																	'font-style' => 'font-style',
																	'font-size' => 'font-size',
																	'font-weight' => 'font-weight',
																	'color' => 'color');
	function __construct($text, $options = array()) {
		
		$this->text = $text;
		$this->options = $options;
		$this->cehck();
	}

}