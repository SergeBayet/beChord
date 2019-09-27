<?php

class MidiInstrument extends CompoObject {
	static $availableComponents = array('midi-channel' => 'midi-16',
																			'midi-name' => 'xs:string',
																			'midi-bank' => 'midi-16384',
																			'midi-program' => 'midi-128',
																			'midi-unpitched' => 'midi-128',
																			'volume' => 'percent',
																			'pan' => 'rotation-degrees',
																			'elevation' => 'rotation-degrees'
																			);
	static $availableOptions = array('id' => 'xs:IDREF');
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