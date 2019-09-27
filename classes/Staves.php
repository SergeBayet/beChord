<?php

class Staves extends CompoObject {
	protected $textRestriction = 'xs:nonNegativeInteger';
	static $availableOptions = array();
	function __construct($text, $options = array()) {
		
		$this->text = $text;
		$this->options = $options;
		$this->check();
	}

}