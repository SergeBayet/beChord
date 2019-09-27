<?php

class WavyLine extends CompoObject {
	
	
	static $availableOptions = array('type' => 'start-stop-continue',
																	 'number' => 'number-level',
																	 'default-x' => 'tenths',
																	 'default-y' => 'tenths',
																	 'relative-x' => 'tenths',
																	 'relative-y' => 'tenths',
																	 'placement' => 'above-below',
																	 'color' => 'color',
																	 'start-note' => 'start-note',
																	 'trill-step' => 'trill-step',
																	 'two-note-turn' => 'two-note-turn',
																	 'accelerate' => 'yes-no',
																	 'beats' => 'trill-beats',
																	 'second-beat' => 'percent',
																	 'last-beat' => 'percent');
	function __construct($options = array()) {
		
		$this->options = $options;
		$this->check();
	}

}