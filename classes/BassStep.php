<?php

class BassStep extends CompoObject {
	protected $textRestriction = 'step';
	static $availableComponents = array();
	static $availableOptions = array('text' => 'xs:token',
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
																	'valign' => 'valign'
																	);
	function __construct($text, $options = array()) {
	
		$this->text = $text;
		$this->options = $options;
		$this->check();
	}
}