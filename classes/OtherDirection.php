<?php

class OtherDirection extends CompoObject {
	protected $textRestriction = 'xs:string';
	static $availableOptions = array('print-object' => 'yes-no',
																	'default-x' => 'tenths',
																	'default-y' => 'tenths',
																	 'relative-x' => 'tenths',
																	'relative-y' => 'tenths',
																	'font-family' => 'comma-separated-text',
																	'font-size' => 'font-size',
																	'font-style' => 'font-style',
																	'font-weight' => 'font-weight',
																	'color' => 'color',
																'halign' => 'left-center-right',
																'valign' => 'valign');
	function __construct($text, $options = array()) {
		$this->text = $text;
		$this->options = $options;
		$this->check();
	}

}