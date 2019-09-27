<?php

class Harmonic extends CompoObject {
	static $availableComponents = array('artificial' => 'empty',
																			'natural' => 'empty',
																			'base-pitch' => 'empty',
																			'sounding-pitch' => 'empty',
																			'touching-pitch' => 'empty'
																			);
	static $availableOptions = array('default-x' => 'tenths',
																	'default-y' => 'tenths',
																	'relative-x' => 'tenths',
																	'relative-y' => 'tenths',
																	'font-family' => 'comma-separated-text',
																	'font-size' => 'font-size',
																	'font-style' => 'font-style',
																	'font-weight' => 'font-weight',
																	'color' => 'color',
																	'placement' => 'above-below',
																'print-object' => 'yes-no');
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