<?php

class DegreeValue extends CompoObject {
	protected $textRestriction = 'xs:positiveInteger';
	static $availableComponents = array();
	static $availableOptions = array('symbol' => 'degree-symbol-value',
																	 'text' => 'xs:token',
																		'default-x' => 'tenths',
																	'default-y' => 'tenths',
																	 'relative-x' => 'tenths',
																	'relative-y' => 'tenths',
																	'font-family' => 'comma-separated-text',
																	'font-size' => 'font-size',
																	'font-style' => 'font-style',
																	'font-weight' => 'font-weight',
																	'color' => 'color');
	function __construct($text, $options = array()) {
		$this->text = $text;
		$this->options = $options;
		$this->check();
	}

}