<?php

class MetronomeNote extends CompoObject {
	static $availableComponents = array('metronome-type' => 'note-type-value',
																			'metronome-dote' => 'empty',
																			'metronome-beam' => 'metronome-beam',
																			'metronome-tuplet' => 'metronome-tuplet'
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