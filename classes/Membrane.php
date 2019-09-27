<?php

class Membrane extends CompoObject {
	protected $textRestriction = 'membrane';
	static $availableComponents = array();
	static $availableOptions = array();
	function __construct($text, $options = array()) {
		$this->text = $text;
		$this->options = $options;
		$this->check();
	}

}