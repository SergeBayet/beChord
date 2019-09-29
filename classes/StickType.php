<?php

class StickType extends CompoObject {
	
	protected $textRestriction = 'stick-type';
	static $availableOptions = array();
	static $availableComponents = array();
	function __construct($text, $options = array()) {
		$this->text = $text;
		$this->options = $options;
		$this->check();
	}


}