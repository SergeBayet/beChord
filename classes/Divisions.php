<?php

class Divisions extends CompoObject {
	protected $textRestriction = 'positive-divisions';
	function __construct($text) {
		$this->text = $text;
		$this->options = array();
		$this->check();
	}
	
}