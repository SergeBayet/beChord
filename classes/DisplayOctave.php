<?php

class DisplayOctave extends CompoObject {
	protected $textRestriction = 'octave';
	function __construct($text) {
		$this->text = $text;
		$this->check();
	}
	
}