<?php

class Print_ extends CompoObject {
	static $availableComponents = array('page-layout' => 'page-layout',
																			'system-layout' => 'system-layout',
																			'staff-layout' => 'staff-layout',
																			'measure-layout' => 'measure-layout',
																			'measure-numbering' => 'measure-numbering',
																			'part-name-display' => 'name-display',
																			'part-abbreviation-display' => 'name-display'
																			);
	static $availableOptions = array('staff-spacing' => 'tenths',
																	 'new-system' => 'yes-no',
																	 'new-page' => 'yes-no',
																	 'blank-page' => 'xs:positiveInteger',
																	 'page-number' => 'xs:token');
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