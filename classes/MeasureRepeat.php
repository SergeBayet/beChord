<?php

class MeasureRepeat extends CompoObject {
	protected $textRestriction = 'positive-integer-or-empty';
	static $availableComponents = array();
	static $availableOptions = array('type' => 'start-stop',
																	 'slashes' => 'xs:positiveInteger');
	function __construct($text, $options = array()) {
		$this->text = $text;
		$this->options = $options;
		$this->check();
	}
}