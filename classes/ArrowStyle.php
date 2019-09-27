<?php

class ArrowStyle extends CompoObject {
	static $availableComponents = array();
	static $availableOptions = array();
	protected $textRestriction = 'arrow-style';
	function __construct($text, $options = array()) {
	
		$this->text = $text;
		$this->options = $options;
		$this->check();
	}
}