<?php

class PageLayout extends CompoObject {
	static $availableComponents = array('page-height' => 'tenths',
																			'page-width' => 'tenths',
																			'page-margins' => 'page-margins'
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