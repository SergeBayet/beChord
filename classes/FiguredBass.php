<?php

class FiguredBass extends CompoObject {
	static $availableComponents = array('figure' => 'figure',
																			'duration' => 'positive-duration',
																			'footnote' => 'formatted-text',
																			'level' => 'level'
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
																	'print-object' => 'yes-no',
																	'print-dot' => 'yes-no',
																	'print-spacing' => 'yes-no',
																	'print-lyric' => 'yes-no',
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