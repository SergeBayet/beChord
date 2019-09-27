<?php

class ScorePart extends CompoObject {
	static $availableComponents = array('identification' => 'identification',
																			'part-name' => 'part-name',
																			'part-name-display' => 'name-display',
																			'part-abbreviation' => 'part-name',
																			'part-abbreviation-display' => 'name-display',
																			'group' => 'xs:string',
																			'score-instrument' => 'score-instrument',
																			'midi-device' => 'midi-device',
																			'midi-instrument' => 'midi-instrument'
																			);
	static $availableOptions = array('id' => 'xs:ID');
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