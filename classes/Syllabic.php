<?php

class Syllabic extends CompoObject {
	protected $textRestriction = 'syllabic';
	static $availableComponents = array();
	static $availableOptions = array(
																	);
	function __construct($text, $options = array()) {
	
		$this->text = $text;
		$this->options = $options;
		$this->check();
	}

}