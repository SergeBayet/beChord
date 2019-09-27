<?php

class Fifths extends CompoObject {
	protected $textRestriction = 'fifths';
	static $availableComponents = array();
	static $availableOptions = array();
	function __construct($text, $options = array())
	{
		$this->text = $text;
		$this->options = $options;
		$this->check();
	}
	
}