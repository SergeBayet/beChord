<?php

class CircularArrow extends CompoObject {
	protected $textRestriction = 'circular-arrow';
	static $availableComponents = array();
	static $availableOptions = array();
	function __construct($text, $options = array()) {
	
		$this->text = $text;
		$this->options = $options;
		$this->check();
	}
}