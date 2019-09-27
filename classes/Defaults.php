<?php

class Defaults extends CompoObject {
	static $availableComponents = array('scaling' => 'scaling',
																			'page-layout' => 'page-layout',
																			'system-layout' => 'system-layout',
																			'staff-layout' => 'staff-layout',
																			'appearance' => 'appearance',
																			'music-font' => 'empty-font',
																			'word-font' => 'empty-font',
																			'lyric-font' => 'lyric-font',
																			'lyric-language' => 'lyric-language'
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