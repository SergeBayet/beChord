<?php

class Lyric extends CompoObject {
	static $availableComponents = array('extend' => 'extend',
																			'humming' => 'empty',
																			'laughing' => 'empty',
																			'syllabic' => 'syllabic',
																			'text' => 'text-element-data',
																			'elision' => 'text-font-color',
																			'end-line' => 'empty',
																			'end-paragraph' => 'empty',
																			'footnote' => 'formatted-text',
																			'level' => 'level'
																			);
	static $availableOptions = array('number' => 'xs:NMTOKEN',
																		'name' => 'xs:token',
																		'justify' => 'left-center-right',
																	'default-x' => 'tenths',
																	'default-y' => 'tenths',
																	 'relative-x' => 'tenths',
																	'relative-y' => 'tenths',
																	'placement' => 'above-below',
																	'color' => 'color',
																	'print-object' => 'yes-no'
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