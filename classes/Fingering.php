<?php

class Fingering extends CompoObject {
	protected $textRestriction = 'xs:string';
	static $availableComponents = array();
	static $availableOptions = array('substitution' => 'yes-no',
																	'alternate' => 'yes-no',
																	'placement' => 'above-below',
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