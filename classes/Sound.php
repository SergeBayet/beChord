<?php

class Sound extends CompoObject {
	static $availableComponents = array('midi-device' => 'midi-device',
																			'midi-instrument' => 'midi-instrument',
																			'play' => 'play',
																			'offset' => 'offset'
																			);
	static $availableOptions = array('tempo' => 'non-negative-decimal',
																		'dynamics' => 'non-negative-decimal',
																	'dacapo' => 'yes-no',
																	'segno' => 'xs:token',
																	'dalsegno' => 'xs:token',
																	'coda' => 'xs:token',
																	'tocoda' => 'xs:token',
																	'divisions' => 'divisions',
																	'forward-repeat' => 'yes-no',
																	'fine' => 'xs:token',
																	'time-only' => 'time-only',
																	'pizzicato' => 'yes-no',
																	'pan' => 'rotation-degrees',
																	'elevation' => 'rotation-degrees',
																	'damper-pedal' => 'yes-no-number',
																	'soft-pedal' => 'yes-no-number',
																	'sostenuto-pedal' => 'yes-no-number');
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