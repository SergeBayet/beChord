<?php

class PartGroup extends CompoObject {
	static $availableComponents = array('group-name' => 'group-name',
																			'group-name-display' => 'name-display',
																			'group-abbreviation' => 'group-name',
																			'group-abbreviation-display' => 'name-display',
																			'group-symbol' => 'group-symbol',
																			'group-barline' => 'group-barline',
																			'group-time' => 'empty',
																			'footnote' => 'formatted-text',
																			'level' => 'level'
																			);
	static $availableOptions = array('type' => 'start-stop',
																	 'number' => 'xs:token');
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