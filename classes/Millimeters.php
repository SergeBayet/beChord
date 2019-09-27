<?php

class Millimeters extends CompoObject {
	protected $textRestriction = 'xs:decimal';
	static $availableComponents = array();
	static $availableOptions = array();
	function __construct($text, $options = array()) {
	
		$this->text = $text;
		$this->options = $options;
		$this->check();
	}

}