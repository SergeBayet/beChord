<?php

class StaffType extends CompoObject {
	protected $textRestriction = 'staff-type';
	static $availableComponents = array();
	static $availableOptions = array();
	function __construct($text, $options = array()) {
	
		$this->text = $text;
		$this->options = $options;
		$this->check();
	}

}