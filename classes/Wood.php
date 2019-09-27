<?php

class Wood extends CompoObject {
	protected $textRestriction = 'wood';
	static $availableComponents = array();
	static $availableOptions = array();
	function __construct($text, $options = array()) {
		$this->text = $text;
		$this->options = $options;
		$this->check();
	}

}