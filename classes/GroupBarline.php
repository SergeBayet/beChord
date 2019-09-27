<?php

class GroupBarline extends CompoObject {
	protected $textRestriction = 'group-barline-value';
	static $availableComponents = array();
	static $availableOptions = array('color' => 'color');
	function __construct($text, $options = array()) {
		$this->text = $text;
		$this->options = $options;
		$this->check();
	}
}