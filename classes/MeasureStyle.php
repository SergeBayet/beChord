<?php

class MeasureStyle extends CompoObject {
	
	static $availableComponents = array('beat-repeat' => 'beat-repeat',
																			 'measure-repeat' => 'measure-repeat',
																			 'multiple-rest' => 'multiple-rest',
																			 'slash' => 'slash');
	static $availableOptions = array('number' => 'staff-number',
																	 'font-family' => 'comma-separated-text',
																	 'font-style' => 'font-style',
																	 'font-size' => 'font-size',
																	 'font-weight' => 'font-weight',
																	 'color' => 'color');
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