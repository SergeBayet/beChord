<?php

class InvertedMordent extends CompoObject {
	
	
	static $availableOptions = array('long' => 'yes-no',
																	 'approach' => 'above-below',
																	 'departure' => 'above-below',
																	 'default-x' => 'tenths',
																	'default-y' => 'tenths',
																	 'relative-x' => 'tenths',
																	'relative-y' => 'tenths',
																	'font-family' => 'comma-separated-text',
																	'font-size' => 'font-size',
																	'font-style' => 'font-style',
																	'font-weight' => 'font-weight',
																	'color' => 'color',
																	'placement' => 'above-below',
																	'start-note' => 'start-note',
																	'trill-step' => 'trill-step',
																	'two-note-turn' => 'two-note-turn',
																	'accelerate' => 'yes-no',
																	'beats' => 'trill-beats',
																	'second-beat' => 'percent',
																	'last-beat' => 'percent'
																	);
	function __construct($options = array()) {
		
		$this->options = $options;
		$this->check();
	}
}