<?php

class Cancel extends CompoObject {
	protected $textRestriction = 'fifths';
	static $availableOptions = array('location' => 'cancel-location');
	function __construct($text, $options = array()) {
		$this->text = $text;
		$this->options = $options;
		$this->check();
	}

}