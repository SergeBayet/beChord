<?php

class SemiPitched extends CompoObject {
	protected $textRestriction = 'semi-pitched';
	static $availableComponents = array();
	static $availableOptions = array();
	function __construct($text, $options = array()) {
		$this->text = $text;
		$this->options = $options;
		$this->check();
	}

}