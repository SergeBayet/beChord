<?php

class Tenths extends CompoObject {
	protected $textRestriction = 'tenths';
	static $availableComponents = array();
	static $availableOptions = array();
	function __construct($text, $options = array()) {
	
		$this->text = $text;
		$this->options = $options;
		$this->check();
	}

}