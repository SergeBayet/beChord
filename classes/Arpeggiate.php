<?php

class Arpeggiate extends CompoObject {
	
	
	static $availableOptions = array('number' => 'number-level',
																	 'direction' => 'up-down',
																	 'default-x' => 'tenths',
																	 'default-y' => 'tenths',
																	 'relative-x' => 'tenths',
																	 'relative-y' => 'tenths',
																	 'color' => 'color',
																	 'placement' => 'above-below');
	function __construct($options = array())
	{
		$this->options = $options;
		$this->check();
	}


}