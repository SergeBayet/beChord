<?php

class HoleClosed extends CompoObject {
	protected $textRestriction = 'hole-closed-value';
	static $availableComponents = array();
	static $availableOptions = array('location' => 'hole-closed-location'
																	);
	function __construct($text, $options = array()) {
	
		$this->text = $text;
		$this->options = $options;
		$this->check();
	}

}