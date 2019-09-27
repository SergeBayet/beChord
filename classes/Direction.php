<?php

class Direction extends CompoObject {
	static $availableComponents = array('direction-type' => 'direction-type',
																			'offset' => 'offset',
																			'voice' => 'xs:string',
																			'staff' => 'xs:positiveInteger',
																			'sound' => 'sound'
																			);
	static $availableOptions = array('placement' => 'above-below',
																		'directive' => 'yes-no');
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