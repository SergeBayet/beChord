<?php

class Metronome extends CompoObject {
	static $availableComponents = array('metronome-note' => 'metronome-note',
																			'metronome-relation' => 'xs:string',
																			'beat-unit' => 'note-type-value',
																			'beat-unit-dot' => 'empty',
																			'per-minute' => 'per-minute'
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
																	'halign' => 'left-center-right',
																	'valign' => 'valign',
																	'justify' => 'left-center-right',
																	'parentheses' => 'yes-no');
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