<?php

class PartList extends CompoObject {
	static $availableComponents = array('part-group' => 'part-group',
																			'score-part' => 'score-part'
																			
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