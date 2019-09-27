<?php

class Pitched extends CompoObject {
	protected $textRestriction = 'pitched';
	static $availableComponents = array();
	static $availableOptions = array();
	function __construct($text, $options = array()) {
		$this->text = $text;
		$this->options = $options;
		$this->check();
	}

}