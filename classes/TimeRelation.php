<?php

class TimeRelation extends CompoObject {
	
	protected $textRestriction = 'time-relation';
	static $availableOptions = array();
	static $availableComponents = array();
	function __construct($text, $options = array()) {
		$this->text = $text;
		$this->options = $options;
		$this->check();
	}


}