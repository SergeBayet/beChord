<?php

class MetronomeBeam extends CompoObject {
	protected $textRestriction = 'beam-value';
	static $availableComponents = array();
	static $availableOptions = array('number' => 'beam-level');
	function __construct($text, $options = array()) {
		$this->text = $text;
		$this->options = $options;
		$this->check();
	}
}