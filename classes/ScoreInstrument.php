<?php

class ScoreInstrument extends CompoObject {
	static $availableComponents = array('instrument-name' => 'xs:string',
																			'instrument-abbreviation' => 'xs:string',
																			'instrument-sound' => 'xs:string',
																			'ensemble' => 'positive-integer-or-empty',
																			'solo' => 'empty'
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