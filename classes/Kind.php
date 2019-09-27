<?php

class Kind extends CompoObject {
	protected $textRestriction = 'kind-value';
	static $availableComponents = array();
	static $availableOptions = array('use-symbols' => 'yes-no',
																	'text' => 'xs:token',
																	'stack-degrees' => 'yes-no',
																	'parenthesees-degrees' => 'yes-no',
																	'bracket-degrees' => 'yes-no',
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