<?php

class Ornaments extends CompoObject {
	static $availableComponents = array('delayed-inverted-turn' => 'horizontal-turn',
																			'delayed-turn' => 'horizontal-turn',
																			'inverted-mordent' => 'mordent',
																			'inverted-turn' => 'horizontal-turn',
																			'mordent' => 'mordent',
																			'other-ornament' => 'placement-text',
																			'schleifer' => 'empty-placement',
																			'shake' => 'empty-trill-sound',
																			'tremolo' => 'tremolo',
																			'trill-mark' => 'empty-trill-sound',
																			'turn' => 'horizontal-turn',
																			'vertical-turn' => 'empty-trill-sound',
																			'wavy-line' => 'wavy-line',
																			'accidental-mark' => 'accidental-mark'
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