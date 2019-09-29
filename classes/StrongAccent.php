<?php

class StrongAccent extends CompoObject {
	
	protected $textRestriction = 'empty-placement';
	static $availableOptions = array('type' => 'up-down',
                                  'default-x' => 'tenths',
                                  'default-y' => 'tenths',
                                  'relative-x' => 'tenths',
                                  'relative-y' => 'tenths',
                                  'font-family' => 'comma-separated-text',
                                  'font-size' => 'font-size',
                                  'font-style' => 'font-style',
                                  'font-weight' => 'font-weight',
                                  'color' => 'color',
                                  'placement' => 'above-below');
	static $availableComponents = array();
	function __construct($text, $options = array()) {
		$this->text = $text;
		$this->options = $options;
		$this->check();
	}


}