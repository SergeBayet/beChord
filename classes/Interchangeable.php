<?php

class Interchangeable extends CompoObject {

	static $availableComponents = array('beats' => 'xs:string',
																			'time-relation' => 'time-relation',
																			'beat-type' => 'xs:string');
	static $availableOptions = array('symbol' => 'time-symbol',
																	'separator' =>'time-separator');
	function __construct($components, $options = array()) {
		$this->components = $components;
		$this->options = $options;
		$this->check();
	}
	
}