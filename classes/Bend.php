<?php

class Bend extends CompoObject {
	
	static $availableComponents = array('bend-alter' => 'semitones',
																			'pre-bend' => 'empty',
																			'release' => 'empty',
																			'with-bar' => 'placement-text'
																			);
	static $availableOptions = array(
																	 'default-x' => 'tenths',
																	'default-y' => 'tenths',
																	 'relative-x' => 'tenths',
																	'relative-y' => 'tenths',
																	'font-family' => 'comma-separated-text',
																	'font-size' => 'font-size',
																	'font-style' => 'font-style',
																	'font-weight' => 'font-weight',
																	'color' => 'color',
																	'trill-step' => 'trill-step',
																	'accelerate' => 'yes-no',
																	'beats' => 'trill-beats',
																	'first-beat' => 'percent',
																	'last-beat' => 'percent'
																	);
	function __construct($components, $options = array()) {
		if(!is_array($components))
		{
			$components = array($components);
		}
		$this->components = $components;
		$this->options = $options;
		$this->check();
	}

}