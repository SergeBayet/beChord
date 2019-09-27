<?php

class Notations extends CompoObject {
	static $availableComponents = array('accidental-mark' => 'accidental-mark',
																			'arpeggiate' => 'arpeggiate',
																			'articulations' => 'articulations',
																			'dynamics' => 'dynamics',
																			'fermata'=>'fermata',
																			'glissando' => 'glissando',
																			'non-arpeggiate' => 'non-arpeggiate',
																			'ornaments' => 'ornaments',
																			'other-notation' => 'other-notation',
																			'slide' => 'slide',
																			'slur' => 'slur',
																			'technical' => 'technical',
																			'tied' => 'tied',
																			'tuplet' => 'tuplet'
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