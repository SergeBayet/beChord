<?php

class ActualNotes extends CompoObject {
	protected $textRestriction = "xs:positiveInteger";

	function __construct($text) {
		
		$this->text = $text;
		$this->check();
	}
	
}