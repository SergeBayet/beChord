<?php

class AccordionMiddle extends CompoObject {
	
	protected $text;
	protected $options;
	static $availableOptions = array();
	
	function __construct($text = "", $options = array()) {
		
		$this->text = $text;
		$this->options = $options;
		$this->check();
	}

	
}