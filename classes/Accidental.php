<?php

class Accidental extends CompoObject {
	protected $text;
	protected $options;
	protected $textRestriction = 'accidental-value';
	static $availableOptions = array('cautionary' => 'yes-no',
																		'editorial' =>'yes-no',
																		'parentheses' => 'yes-no',
																		'bracket' => 'yes-no',
																		'size' => 'symbol-size',
																		'default-x' => 'tenths',
																	 'default-y' => 'tenths',
																	 'relative-x' => 'tenths',
																	 'relative-y' => 'tenths',
																	 'font-family' => 'comma-separated-text',
																	 'font-style' => 'font-style',
																	 'font-size' => 'font-size',
																	 'font-weight' => 'font-weight',
																	 'color' => 'color');
	function __construct($text, $options = array())
	{
		
		$this->text = $text;
		$this->options = $options;
		$this->check();
	}
}