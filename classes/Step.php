<?php

class Step extends CompoObject {
	
	protected $textRestriction = 'step';
	static $availableOptions = array();
	static $availableComponents = array();
	function __construct($text, $options = array()) {
		$this->text = $text;
		$this->options = $options;
		$this->check();
	}


}