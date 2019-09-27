<?php

class Percussion extends CompoObject {
	static $availableComponents = array('beater' => 'beater',
																			'effect' => 'effect',
																			'glass' => 'glass',
																			'membrane' => 'membrane',
																			'metal' => 'metal',
																			'other-percussion' => 'xs:string',
																			'pitched' => 'pitched',
																			'stick' => 'stick',
																			'stick-location' => 'stick-location',
																			'timpani' => 'empty',
																			'wood' => 'wood'
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
																	'enclosure-shape' => 'enclosure-shape');
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