<?php

class NormalType extends CompoObject {

	protected $textRestriction = 'note-type-value';
	
	function __construct($text) {
		$this->text = $text;
		$this->check();
		
	}
	
}