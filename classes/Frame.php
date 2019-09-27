<?php

class Frame extends CompoObject {
	static $availableComponents = array('frame-strings' => 'xs:positiveInteger',
																			'frame-frets' => 'xs:positiveInteger',
																			'first-fret' => 'first-fret',
																			'frame-note' => 'frame-note'
																			);
	static $availableOptions = array('default-x' => 'tenths',
																	'default-y' => 'tenths',
																	'relative-x' => 'tenths',
																	'relative-y' => 'tenths',
																	'color' => 'color',
																	'halign' => 'left-center-right',
																	'valign' => 'valign-image',
																	'height' => 'tenths',
																	'width' => 'tenths',
																	'unplayed' => 'xs:token'
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