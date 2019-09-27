<?php


abstract class CompoValues {

	static $values = [
		'xs:decimal' => [
			'type' => 'regex',
			'values' => '(\+|-)?([0-9]+(\.[0-9]*)?|\.[0-9]+)'
		],
		'xs:integer' => [
			'type' => 'regex',
			'values' => '[\-+]?[0-9]+'
		],
		'xs:nonNegativeInteger' => [
			'type' => 'xs:positiveInteger'
		],
		'xs:positiveInteger' => [
			'type' => 'regex',
			'values' => '[+]?[0-9]+'
		],
		'xs:token' => [
			'type' => 'regex',
			'values' => '\S+( \S+)*'
		],
		'xs:string' => [
			'type' => 'regex',
			'values' => '.*'
		],
		'above-below' => [
			'type' => 'enumeration',
			'values' => [
				'above',
				'below'
			]
		],
		'accidental-value' => [
			'type' => 'enumeration',
			'values' => [
				'sharp', 'natural', 'flat', 'double-sharp', 'sharp-sharp', 'flat-flat',
				'natural-sharp', 'natural-flat', 'quarter-flat', 'quarter-sharp', 
				'three-quarters-flat', 'three-quarters-sharp', 'sharp-down', 'sharp-up',
				'natural-down', 'natural-up', 'flat-down', 'flat-up', 'triple-sharp',
				'triple-flat', 'slash-quarter-sharp', 'slash-sharp', 'slash-flat', 'double-slash-flat',
				'sharp-1', 'sharp-2', 'sharp-3', 'sharp-5', 'flat-1', 'flat-2', 'flat-3', 'flat-4', 
				'sori', 'koron'
			]
		],
		'accordion-middle' => [
			'type' => 'regex',
			'values' => '[1-3]'
		],
		'arrow-direction' => [
			'type' => 'enumeration',
			'values' => [
				'left',
				'up',
				'right',
				'down',
				'northwest',
				'northeast',
				'southeast',
				'southwest',
				'left right',
				'up down',
				'northwest southeast',
				'northeast southwest',
				'other'
			]
		],
		'arrow-style' => [
			'type' => 'enumeration',
			'values' => [
				'single',
				'double',
				'filled',
				'hollow',
				'paired',
				'combined',
				'other'
			]
		],
		'backward-forward' => [
			'type' => 'enumeration',
			'values' => [
				'backward',
				'forward'
			]
		],
		'bar-style' => [
			'type' => 'enumeration',
			'values' => [
				'regular',
				'dotted',
				'dashed',
				'heavy',
				'light-light',
				'light-heavy',
				'heavy-light',
				'heavy-heavy',
				'tick',
				'short',
				'none'
			]	
		],
		'beam-level' => [
			'type' => 'regex',
			'values' => '[1-8]'
		],
		'beam-value' => [
			'type' => 'enumeration',
			'values' => [
				'begin',
				'continue',
				'end',
				'forward hook',
				'backward hook'
			]
		],
		'beater-value' => [
			'type' => 'enumeration',
			'values' => [
				'bow',
				'chime hammer',
				'coin',
				'finger',
				'fingernail',
				'fist',
				'guiro scraper',
				'hammer',
				'hand',
				'jazz stick',
				'knitting needle',
				'metal hammer',
				'snare stick',
				'spoon mallet',
				'triangle beater',
				'triangle beater plain',
				'wire brush'
			]
		],
		'breath-mark-value' => [
			'type' => 'enumeration',
			'values' => [
				'comma', 'tick'
			]
		],
		'cancel-location' => [
			'type' => 'enumeration',
			'values' => [
				'left',
				'right',
				'before-barline'
			]
		],
		'circular-arrow' => [
			'type' => 'enumeration',
			'values' => [
				'clockwise',
				'anticlockwise'
			]
		],
		'clef-sign' => [
			'type' => 'enumeration',
			'values' => [
				'G',
				'F',
				'C',
				'percussion',
				'TAB',
				'jianpu',
				'none'
			]
		],
		'color' => [
			'type' => 'regex',
			'values' => '#[\dA-F]{6}([\dA-F][\dA-F])?'
		],
		'comma-separated-text' => [
			'type' => 'regex',
			'values' => '[^,]+(, ?[^,]+)*'
		],
		'css-font-size' => [
			'type' => 'enumeration',
			'values' => [
				'xx-small',
				'x-small',
				'small',
				'medium',
				'large',
				'x-large',
				'xx-large'
			]
		],
		'degree-symbol-value' => [
			'type' => 'enumeration',
			'values' => [
				'major',
				'minor',
				'augmented',
				'diminished',
				'half-diminished'
			]
		],
		'degree-type-value' => [
			'type' => 'enumeration',
			'values' => [
				'add', 'alter', 'substract'
			]
		],
		'distance-type' => [
			'type' => 'xs:token'
		],
		'divisions' => [
			'type' => 'xs:decimal'
		],
		'effect' => [
			'type' => 'enumeration',
			'values' => [
				'anvil',
				'auto horn',
				'bird whistle',
				'cannon',
				'duck call',
				'gun shot',
				'klaxon horn',
				'lions roar',
				'police whistle',
				'siren',
				'slide whistle',
				'thunder sheet',
				'wind machine',
				'wind whistle'
			]
		],
		'enclosure-shape' => [
			'type' => 'enumeration',
			'values' => [
				'rectangle',
				'square',
				'oval',
				'circle',
				'bracket',
				'triangle',
				'diamond',
				'none'
			]
		],
		'ending-number' => [
			'type' => 'regex',
			'values' => '([ ]*)|([1-9][0-9]*(, ?[1-9][0-9]*)*)'
		],
		'fan' => [
			'type' => 'enumeration',
			'values' => [
				'accel',
				'rit',
				'none'
			]
		],
		'fermata-shape' => [
			'type' => 'enumeration',
			'values' => [
				'normal',
				'angled',
				'square',
				''
			]
		],
		'fifths' => [
			'type' => 'xs:integer'
		],
		'font-size' => [
			'type' => ['xs:decimal', 'css-font-size']
		],
		'font-style' => [
			'type' => 'enumeration',
			'values' => [
				'italic',
				'normal'
			]
		],
		'font-weight' => [
			'type' => 'enumeration',
			'values' => [
				'bold',
				'normal'
			]
		],
		'glass' => [
			'type' => 'enumeration',
			'values' => [
				'wind chimes'
			]
		],
		'group-barline-value' => [
			'type' => 'enumeration',
			'values' => [
				'yes',
				'no',
				'Mensurstrich'
			]
		],
		'group-symbol-value' => [
			'type' => 'enumeration',
			'values' => [
				'none',
				'brace',
				'line',
				'bracket',
				'square'
			]
		],
		'handbell-value' => [
			'type' => 'enumeration',
			'values' => [
				'echo',
				'gyro',
				'hand martellato',
				'mallet lift',
				'mallet table',
				'martellato',
				'martellato lift',
				'muted martellato',
				'pluck lift',
				'swing'
			]
		],
		'harmony-type' => [
			'type' => 'enumeration',
			'values' => [
				'explicit',
				'implied',
				'alternate'
			]
		],
		'hole-closed-location' => [
			'type' => 'enumeration',
			'values' => [
				'right',
				'bottom',
				'left',
				'top'
			]
		],
		'hole-closed-value' => [
			'type' => 'enumeration',
			'values' => [
				'yes',
				'no',
				'half'
			]
		],
		'kind-value' => [
			'type' => 'enumeration',
			'values' => [
				'dominant',
				'major-seventh',
				'minor-seventh',
				'diminished-seventh',
				'augmented-seventh',
				'half-diminished',
				'major-minor',
				'major-sixth',
				'minor-sixth',
				'dominant-ninth',
				'major-ninth',
				'minor-ninth',
				'dominant-11th',
				'major-11th',
				'minor-11th',
				'dominant-13th',
				'major-13th',
				'minor-13th',
				'suspended-second',
				'suspended-fourth',
				'Neapolitan',
				'Italian',
				'French',
				'German',
				'pedal',
				'power',
				'Tristan',
				'other',
				'none'
			]
		],
		'left-center-right' => [
			'type' => 'enumeration',
			'values' => ['left', 'center', 'right']
		],
		'left-right' => [
			'type' => 'enumeration',
			'values' => ['left', 'right']
		],
		'line-end' => [
			'type' => 'enumeration',
			'values' => [
				'up',
				'down',
				'both',
				'arrow',
				'none'
			]
		],
		'line-shape' => [
			'type' => 'enumeration',
			'values' => [
				'straight',
				'curved'
			]
		],
		'line-type' => [
			'type' => 'enumeration',
			'values' => [
				'solid',
				'dashed',
				'dotted',
				'wavy'
			]
		],
		'line-width-type' => [
			'type' => 'xs:token'
		],
		'margin-type' => [
			'type' => 'enumeration',
			'values' => [
				'odd',
				'even',
				'both'
			]
		],
		'measure-numbering-value' => [
			'type' => 'enumeration',
			'values' => [
				'none',
				'measure',
				'system'
			]
		],
		'membrane' => [
			'type' => 'enumeration',
			'values' => [
				'bass drum',
				'bass drum on side',
				'bongos',
				'conga drum',
				'goblet drum',
				'military drum',
				'snare drum',
				'snare drum snares off',
				'tambourine',
				'tenor drum',
				'timbales',
				'tomtom'
			]
		],
		'metal' => [
			'type' => 'enumeration',
			'values' => [
				'almglocken',
				'bell',
				'bell plate',
				'brake drum',
				'Chinese cymbal',
				'cowbell',
				'crash cymbals',
				'crotale',
				'cymbal tongs',
				'domed gong',
				'finger cymbals',
				'flexatone',
				'gong',
				'hi-hat',
				'high-hat cymbals',
				'handbell',
				'sistrum',
				'sizzle cymbal',
				'sleigh bells',
				'suspended cymbal',
				'tam tam',
				'triangle',
				'Vietnamese hat'
			]
		],
		'midi-16' => [
			'type' => 'xs:positiveInteger',
			'restriction' => [
				'minInclusive' => '1',
				'maxInclusive' => '16'
			]
		],
		'midi-128' => [
			'type' => 'xs:positiveInteger',
			'restriction' => [
				'minInclusive' => '1',
				'maxInclusive' => '128'
			]
		],
		'midi-16384' => [
			'type' => 'xs:positiveInteger',
			'restriction' => [
				'minInclusive' => '1',
				'maxInclusive' => '16384'
			]
		],
		'millimeters' => [
			'type' => 'xs:decimal'
		],
		'mode' => [
			'type' => 'xs:string'
		],
		'mute' => [
			'type' => 'enumeration',
			'values' => [
				'on',
				'off',
				'straight',
				'cup',
				'harmon-no-stem',
				'harmon-stem',
				'bucket',
				'plunger',
				'hat',
				'solotone',
				'practice',
				'stop-mute',
				'stop-hand',
				'echo',
				'palm'
			]
		],
		'non-negative-decimal' => [
			'type' => 'xs:decimal',
			'restriction' => [
				'minInclusive' => '0'
			]
		],
		'normal' => [
			'type' => 'enumeration',
			'values' => [
				'normal'
			]
		],
		'notehead-value' => [
			'type' => 'enumeration',
			'values' =>
			[
				'slash',
				'triangle',
				'diamond',
				'square',
				'cross',
				'x',
				'circle-x',
				'inverted triangle',
				'arrow down',
				'arrow up',
				'slashed',
				'back slashed',
				'normal',
				'cluster',
				'circle dot',
				'left triangle',
				'rectangle',
				'none',
				'do',
				're',
				'mi',
				'fa',
				'fa up',
				'so',
				'la',
				'ti'
			]
		],
		'note-size-type' => [
			'type' => 'enumeration',
			'values' => [
				'cue',
				'grace',
				'large'
			]
		],
		'note-type-value' => [
			'type' => 'enumeration',
			'values' => [
				'1024th',
				'512th',
				'256th',
				'128th',
				'64th',
				'32nd',
				'16th',
				'eighth',
				'quarter',
				'half',
				'whole',
				'breve',
				'long',
				'maxima'
			]
		],
		'number-level' => [
			'type' => 'xs:positiveInteger',
			'restriction' => [
				'minInclusive' => '1',
				'maxInclusive' => '6'
			]
		],
		'number-of-lines' => [
			'type' => 'xs:positiveInteger',
			'restriction' => [
				'minInclusive' => '0',
				'maxInclusive' => '3'
			]
		],
		'number-or-normal' => [
			'type' => [
				'xs:decimal', 
				'normal'
			]
		],
		'octave' => [
			'type' => 'xs:positiveInteger',
			'restriction' => [
				'minInclusive' => '0',
				'maxInclusive' => '9'
			]
		],
		'on-off' => [
			'type' => 'enumeration',
			'values' => [
				'on', 'off'
			]
		],
		'over-under' => [
			'type' => 'enumeration',
			'values' => [
				'over', 'under'
			]
		],
		'percent' => [
			'type' => 'xs:decimal',
			'restriction' => [
				'minInclusive' => '0',
				'maxInclusive' => '100'
			]
		],
		'pitched' => [
			'type' => 'enumeration',
			'values' => [
				'chimes',
				'glockenspiel',
				'mallet',
				'marimba',
				'tubular chimes',
				'vibraphone',
				'xylophone'
			]
		],
		'positive-decimal' => [
			'type' => 'xs:decimal',
			'restriction' => [
				'minExclusive' => '0'
			]
		],
		'positive-divisions' => [
			'type' => 'divisions',
			'restriction' =>
			[
				'minExclusive' => '0'
			]
		],
		'empty' => [
			'type' => 'enumeration',
			'values' => [
				''
			]
		],
		'positive-integer-or-empty' => [
			'type' => ['xs:positiveInteger', 'empty']
		],
		'principal-voice-symbol' => [
			'type' => 'enumeration',
			'values' => [
				'Hauptstimme',
				'Nebenstimme',
				'plain',
				'none'
			]
		],
		'right-left-middle' => [
			'type' => 'enumeration',
			'values' => [
				'right',
				'left',
				'value'
			]
		],
		'rotation-degrees' => [
			'type' => 'xs:decimal',
			'restriction' =>
			[
				'minInclusive' => '-180',
				'maxInclusive' => '180'
			]
		],
		'semi-pitched' => [
			'type' => 'enumeration',
			'values' => [
				'high',
				'medium-high',
				'medium',
				'medium-low',
				'low',
				'very-low'
			]
		],
		'semi-tones' => [
			'type' => 'xs:decimal'
		],
		'show-frets' => [
			'type' => 'enumeration',
			'values' => [
				'numbers',
				'letters'
			]
		],
		'show-tuplet' => [
			'type' => 'enumeration',
			'values' => [
				'actual', 'both', 'none'
			]
		],
		'staff-line' => [
			'type' => 'xs:integer'
		],
		'staff-number' => [
			'type' => 'xs:positiveInteger'
		],
		'staff-type' => [
			'type' => 'enumeration',
			'values' => [
				'ossia',
				'cue',
				'editorial',
				'regular',
				'alternate'
			]
		],
		'start-note' => [
			'type' => 'enumeration',
			'values' => [
				'upper', 'main', 'below'
			]
		],
		'start-stop' => [
			'type' => 'enumeration',
			'values' => [
				'start', 'stop'
			]
		],
		'start-stop-change-continue' => [
			'type' => 'enumeration',
			'values' => [
				'start', 'stop', 'change', 'continue'
			]
		],
		'start-stop-continue' => [
			'type' => 'enumeration',
			'values' => [
				'start', 'stop', 'continue'
			]
		],
		'start-stop-discontinue' => [
			'type' => 'enumeration',
			'values' => [
				'start', 'stop', 'discontinue'
			]
		],
		'start-stop-single' => [
			'type' => 'enumeration',
			'values' => [
				'start', 'stop', 'single'
			]
		],
		'stem-value' => [
			'type' => 'enumeration',
			'values' => [
				'down', 'up', 'double', 'none'
			]
		],
		'step' => [
			'type' => 'enumeration',
			'values' => [
				'A',
				'B',
				'C',
				'D',
				'E',
				'F',
				'G'
			]
		],
		'stick-location' => [
			'type' => 'enumeration',
			'values' => [
				'center',
				'rim',
				'cymbal bell',
				'cymbal edge'
			]
		],
		'stick-material' => [
			'type' => 'enumeration',
			'values' => [
				'soft',
				'medium',
				'hard',
				'shaded',
				'x'
			]
		],
		'stick-type' => [
			'type' => 'enumeration',
			'values' => [
				'bass drum',
				'double bass drum',
				'timpani',
				'xylophone',
				'yarn'
			]
		],
		'string-number' => [
			'type' => 'xs:positiveInteger'
		],
		'syllabic' => [
			'type' => 'enumeration',
			'values' => [
				'single',
				'begin',
				'end',
				'middle'
			]
		],
		'symbol-size' => [
			'type' => 'enumeration',
			'values' => [
				'full', 'cue', 'large'
			]
		],
		'tenths' => [
			'type' => 'xs:decimal'
		],
		'text-direction' => [
			'type' => 'enumeration',
			'values' => [
				'ltr', 'rtl', 'lro', 'rlo'
			]
		],
		'time-only' => [
			'type' => 'regex',
			'values' => '[1-9][0-9]*(, ?[1-9][0-9]*)*'
		],
		'time-relation' => [
			'type' => 'enumeration',
			'values' => [
				'parentheses',
				'bracket',
				'equals',
				'slash',
				'space',
				'hyphen'
			]
		],
		'time-separator' => [
			'type' => 'enumeration',
			'values' => [
				'none',
				'horizontal',
				'diagonal',
				'vertical',
				'adjacent'
			]
		],
		'time-symbol' => [
			'type' => 'enumeration',
			'values' =>
			[
				'common',
				'cut',
				'single-number',
				'note',
				'dotted-note',
				'normal'
			]
		],
		'tip-direction' => [
			'type' => 'enumeration',
			'values' => [
				'up',
				'down',
				'left',
				'right',
				'northwest',
				'northeast',
				'southeast',
				'southwest'
			]
		],
		'top-bottom' => [
			'type' => 'enumeration',
			'values' => [
				'top', 'bottom'
			]
		],
		'tremolo-marks' => [
			'type' => 'xs:integer',
			'restriction' =>
			[
				'minInclusive' => '0',
				'maxInclusive' => '8'
			]
		],
		'trill-beats' => [
			'type' => 'xs:decimal',
			'restriction' =>
			[
				'minInclusive' => '2'
			]
		],
		'trill-step' => [
			'type' => 'enumeration',
			'values' => [
				'whole', 'half', 'unison'
			]
		],
		'two-note-turn' => [
			'type' => 'enumeration',
			'values' => [
				'whole', 'half', 'none'
			]
		],
		'up-down' => [
			'type' => 'enumeration',
			'values' => [
				'up', 'down'
			]
		],
		'up-down-stop-continue' => [
			'type' => 'enumeration',
			'values' => [
				'up', 'down', 'stop', 'continue'
			]
		],
		'upright-inverted' => [
			'type' => 'enumeration',
			'values' => [
				'upright', 'inverted'
			]
		],
		'valign' => [
			'type' => 'enumeration',
			'values' => [
				'top', 'middle', 'bottom', 'baseline'
			]
		],
		'valign-image' => [
			'type' => 'enumeration',
			'values' => [
				'top', 'middle', 'bottom'
			]
		],
		'wedge-type' => [
			'type' => 'enumeration',
			'values' => [
				'crescendo', 'diminuendo', 'stop', 'continue'
			]
		],
		'winged' => [
			'type' => 'enumeration',
			'values' => [
				'none',
				'straight',
				'curved',
				'double-straight',
				'double-curved'
			]
		],
		'wood' => [
			'type' => 'enumeration',
			'values' => [
				'cabasa',
				'castanets',
				'claves',
				'guiro',
				'log drum',
				'maraca',
				'maracas',
				'ratchet',
				'sandpaper blocks',
				'slit drum',
				'temple block',
				'vibraslap',
				'wood block'
			]
		],
		'yes-no' => [
			'type' => 'enumeration',
			'values' => [
				'yes', 'no'
			]
		],
		'yes-no-number' => [
			'type' => ['xs:decimal', 'yes-no']
		],
		'yyyy-mm-dd' => [
			'type' => 'regex',
			'values' => '([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))'
		]
	];

} 