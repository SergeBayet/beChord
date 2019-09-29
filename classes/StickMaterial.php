<?php

class StickMaterial extends CompoObject {
	
	protected $textRestriction = 'stick-material';
	static $availableOptions = array();
	static $availableComponents = array();
	function __construct($text, $options = array()) {
		$this->text = $text;
		$this->options = $options;
		$this->check();
	}


}