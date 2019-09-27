<?php

class AccidentalText extends CompoObject {
	protected $text;
	protected $options;
	static $availableComponents = array();
	static $availableOptions = array('justify' => 'left-center-right',
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
																	'valign' => 'valign',
																	'underline' => 'number-of-lines',
																	'overline' => 'number-of-lines',
																	'line-through' => 'number-of-lines',
																	'rotation' => 'rotation-degrees',
																	'letter-spacing' => 'number-or-normal',
																	'line-height' => 'number-or-normal',
																	'xml:lang' => 'xs:anySimpleType',
																	'xml:space' => 'xs:NCName',
																	'dir' => 'text-direction',
																	'enclosure' => 'enclosure-shape'
																	);
	function __construct($text, $options = array()) {
	
		$this->text = $text;
		$this->options = $options;
		$this->check();
	}

	
}