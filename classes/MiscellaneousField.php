<?php

class MiscellaneousField extends CompoObject {
	protected $textRestriction = 'xs:string';
	static $availableComponents = array();
	static $availableOptions = array('name' => 'xs:token');
	function __construct($text, $options = array()) {
		$this->text = $text;
		$this->options = $options;
		$this->check();
	}
}