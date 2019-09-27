<?php

class Offset extends CompoObject {
	
	protected $textRestriction = 'divisions';
	static $availableOptions = array('sound' => 'yes-no');
	function __construct($text, $options = array()) {
		$this->text = $text;
		$this->options = $options;
		$this->check();
	}

}