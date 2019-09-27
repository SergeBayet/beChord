<?php

class Duration extends CompoObject {
	protected $textRestriction = 'positive-divisions';
	function __construct($text) {
		$this->text = $text;
		$this->options = array();
	}

}