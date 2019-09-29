<?php

class Octave extends CompoObject {
	
	protected $textRestriction = 'octave';
	static $availableOptions = array();
	static $availableComponents = array();
	function __construct($text, $options = array()) {
		$this->text = $text;
		$this->options = $options;
		$this->check();
	}


}