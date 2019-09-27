<?php

class Harmony extends CompoObject {
	static $availableComponents = array('function' => 'style-text',
																			'root' => 'root',
																			'kind' => 'kind',
																			'inversion' => 'inversion',
																			'bass' => 'bass',
																			'degree' => 'degree',
																			'frame' => 'frame',
																			'offset' => 'offset',
																			'footnote' => 'formatted-text',
																			'level' => 'level',
																			'staff' => 'xs:positiveInteger'
																			);
	static $availableOptions = array('type' => 'harmony-type',
																		'default-x' => 'tenths',
																	'default-y' => 'tenths',
																	 'relative-x' => 'tenths',
																	'relative-y' => 'tenths',
																	'font-family' => 'comma-separated-text',
																	'font-size' => 'font-size',
																	'font-style' => 'font-style',
																	'font-weight' => 'font-weight',
																	'color' => 'color',
																	'print-object' => 'yes-no',
																	'placement' => 'above-below');
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