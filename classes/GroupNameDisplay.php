<?php

class GroupNameDisplay extends CompoObject {
  static $availableComponents = array('accidental-text' => 'accidental-text',
                                      'display-text' => 'formatted-text'
																			);
	static $availableOptions = array('print-object' => 'yes-no');
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