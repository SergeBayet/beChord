<?php

class DirectionType extends CompoObject {
	
	static $availableComponents = array('accordion-registration' => 'accordion-registration',
																			'bracket' => 'bracket',
																			'coda' => 'empty-print-style-align',
																			'damp' => 'empty-print-style-align',
																			'damp-all' => 'empty-print-style-align',
																			'dashes' => 'dashes',
																			'dynamics' => 'dynamics',
																			'eyeglasses' => 'empty-print-style-align',
																			'harp-pedals' => 'harp-pedals',
																			'image' => 'image',
																			'metronome' => 'metronome',
																			'octave-shift' => 'octave-shift',
																			'other-direction' => 'other-direction',
																			'pedal' => 'pedal',
																			'percussion' => 'percussion',
																			'principal-voice' => 'principal-voice',
																			'rehearsal' => 'formatted-text',
																			'scordatura' => 'scordatura',
																			'segno' => 'empty-print-style-align',
																			'string-mute' => 'string-mute',
																			'wedge' => 'wedge');
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