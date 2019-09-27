<?php

class Slur extends CompoObject {
	
	static $availableOptions = array('type' => 'start-stop-continue',
																		'number' => 'number-level',
																		'line-type' => 'line-type',
																		'dash-length' => 'tenths',
																		'space-length' => 'tenths',
																		'orientation' => 'over-under',
																		'bezier-offset' => 'divisions',
																		'bezier-offset2' => 'divisions',
																		'bezier-x' => 'tenths',
																		'bezier-y' => 'tenths',
																		'bezier-x2' => 'tenths',
																		'bezier-x2' => 'tenths',
																		'placement' => 'above-below',
																		'color' => 'color');
	function __construct($options = array()) {
		
		$this->options = $options;
		$this->check();
	}
}