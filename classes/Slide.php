<?php

class Slide extends CompoObject {
	protected $textRestriction = 'xs:string';
	static $availableComponents = array();
	static $availableOptions = array('type' => 'start-stop',
																	'number' => 'number-level',
																	'line-type' => 'line-type',
																	'dash-length' => 'tenths',
																	'space-length' => 'tenths',
																	'default-x' => 'tenths',
																	'default-y' => 'tenths',
																	 'relative-x' => 'tenths',
																	'relative-y' => 'tenths',
																	'font-family' => 'comma-separated-text',
																	'font-size' => 'font-size',
																	'font-style' => 'font-style',
																	'font-weight' => 'font-weight',
																	'color' => 'color',
																	'accelerate' => 'yes-no',
																	'beats' => 'trill-beats',
																	 'first-beat' => 'percent',
																	'last-beat' => 'percent');
	function __construct($text, $options = array()) {
	
		$this->text = $text;
		$this->options = $options;
		$this->check();
	}

}