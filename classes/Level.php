<?php

class Level extends CompoObject {
	
	protected $textRestriction = 'xs:string';
	static $availableOptions = array('reference' => 'yes-no',
																	 'parentheses' => 'yes-no',
																	 'bracket' => 'yes-no',
																	 'size' => 'symbol-size');
	function __construct($text = "", $options = array()) {
		$this->text = $text;
		$this->options = $options;
		$this->check();
	}

}