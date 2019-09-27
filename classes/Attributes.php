<?php

class Attributes extends CompoObject {
	static $availableComponents = array('divisions'=>'positive-divisions',
																			'key' => 'key',
																			'time' => 'time',
																			'staves' => 'staves',
																			'part-symbol' => 'part-symbol',
																			'instruments' => 'xs:nonNegativeInteger',
																			'clef' => 'clef',
																			'staff-details' => 'staff-details',
																			'transpose' => 'transpose',
																			'measure-style' => 'measure-style'
																			);
	static $availableOptions = array();
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