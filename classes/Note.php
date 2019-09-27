<?php

class Note extends CompoObject {
	static $availableComponents = array('chord' => 'empty',
																			'pitch' => 'pitch',
																			'rest' => 'rest',
																			'unpitched' => 'unpitched',
																			'duration' => 'positive-divisions',
																			'tie' => 'tie',
																			'cue' => 'empty',
																			'grace' => 'grace',
																			'instrument' => 'instrument',
																			'voice' => 'xs:string',
																			'type' => 'note-type',
																			'dot' => 'empty-placement',
																			'accdiental' => 'accidental',
																			'time-modification' => 'time-modification',
																			'stem' => 'stem',
																			'notehead' => 'notehead',
																			'notehead-text' => 'notehead-text',
																			'staff' => 'xs:positiveInteger',
																			'beam' => 'beam',
																			'notations' => 'notations',
																			'lyric' => 'lyric',
																			'play' => 'play'
																			);
	static $availableOptions = array('default-x' => 'tenths',
																	'default-y' => 'tenths',
																	 'relative-x' => 'tenths',
																	'relative-y' => 'tenths',
																	'font-family' => 'comma-separated-text',
																	'font-size' => 'font-size',
																	'font-style' => 'font-style',
																	'font-weight' => 'font-weight',
																	'color' => 'color',
																	'print-object' => 'yes-no',
																	'print-dot' => 'yes-no',
																	'print-spacing' => 'yes-no',
																	'print-lyric' => 'yes-no',
																	'dynamics' => 'non-negative-decimal',
																	'end-dynamics' => 'non-negative-decimal',
																	'attack' => 'divisions',
																	'release' => 'divisions',
																	'time-only' => 'time-only',
																	'pizzicato' => 'yes-no');
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