<?php

class Metal extends CompoObject {
	protected $textRestriction = 'metal';
	static $availableComponents = array();
	static $availableOptions = array();
	function __construct($text, $options = array()) {
		$this->text = $text;
		$this->options = $options;
		$this->check();
	}

}