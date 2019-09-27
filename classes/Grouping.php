<?php

class Grouping extends CompoObject {
	static $availableComponents = array('feature' => 'feature');
	static $availableOptions = array('type' => 'start-stop-single',
																	 'number' => 'xs:token',
																	 'member-of' => 'xs:token');
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