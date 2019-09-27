<?php

class Stem extends CompoObject {
	protected $textRestriction = 'stem-value';
	static $availableOptions = array('default-x' => 'tenths',
																		'default-y' => 'tenths',
																	'relative-x' => 'tenths',
																	'relative-y' => 'tenths',
																	'color' => 'color');
	function __construct($text, $options = array()) {
		
		$this->text = $text;
		$this->options = $options;
		$this->check();
	}

}