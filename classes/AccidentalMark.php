<?php

class AccidentalMark extends CompoObject {
	protected $text;
	protected $options;
	static $availableOptions = array('default-x' => 'tenths',
																	 'default-y' => 'tenths',
																	 'relative-x' => 'tenths',
																	 'relative-y' => 'tenths',
																	 'font-family' => 'comma-separated-text',
																	 'font-style' => 'font-style',
																	 'font-size' => 'font-size',
																	 'font-weight' => 'font-weight',
																	 'color' => 'color',
																	 'placement' => 'above-below');
	function __construct($text, $options = array())
	{
	
		$this->text = $text;
		$this->options = $options;
		$this->check();
	}

	
}