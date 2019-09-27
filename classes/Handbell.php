<?php

class Handbell extends CompoObject {
	protected $textRestriction = 'handbell-value';
	static $availableComponents = array();
	static $availableOptions = array(
																	'default-x' => 'tenths',
																	'default-y' => 'tenths',
																	 'relative-x' => 'tenths',
																	'relative-y' => 'tenths',
																	'font-family' => 'comma-separated-text',
																	'font-size' => 'font-size',
																	'font-style' => 'font-style',
																	'font-weight' => 'font-weight',
																	'color' => 'color',
																	'placement' => 'above-below'
																	);
	function __construct($text, $options = array()) {
	
		$this->text = $text;
		$this->options = $options;
		$this->check();
	}

}