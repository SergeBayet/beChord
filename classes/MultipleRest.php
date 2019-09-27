<?php

class MultipleRest extends CompoObject {
	protected $textRestriction = 'positive-integer-or-empty';
	static $availableComponents = array();
	static $availableOptions = array('use-symbols' => 'yes-no');
	function __construct($text, $options = array()) {
		$this->text = $text;
		$this->options = $options;
		$this->check();
	}
}