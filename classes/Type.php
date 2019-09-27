<?php

class Type extends CompoObject {
	
	protected $textRestriction = 'note-type-value';
	static $availableOptions = array('size' => 'symbol-size');
	function __construct($text, $options = array()) {
		$this->text = $text;
		$this->options= $options;
		$this->check();
	}
}