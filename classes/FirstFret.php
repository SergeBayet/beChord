<?php

class FirstFret extends CompoObject {
	protected $textRestriction = 'xs:positiveInteger';
	static $availableComponents = array();
	static $availableOptions = array('text' => 'xs:token',
																	 'location' => 'left-right'
																	);
	function __construct($text, $options = array()) {
		$this->text = $text;
		$this->options = $options;
		$this->check();
	}

}