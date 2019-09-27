<?php

class Dynamics extends CompoObject {
	
	private $dynamicType;
	static $availableComponents = array(	'f' =>	'empty', 
																				'ff' =>	'empty', 
																				'fff' =>	'empty', 
																				'ffff' =>	'empty', 
																				'fffff' =>	'empty', 
																				'ffffff' =>	'empty', 
																				'fp' =>	'empty', 
																				'fz' =>	'empty', 
																				'mf' =>	'empty', 
																				'mp' =>	'empty', 
																				'other-dynamics' =>	'string', 
																				'p' =>	'empty', 
																				'pp' =>	'empty', 
																				'ppp' =>	'empty', 
																				'pppp' =>	'empty', 
																				'ppppp' =>	'empty',
																				'pppppp'=>	'empty',
																				'rf'=>	'empty',
																				'rfz'=>	'empty',
																				'sf'=>	'empty',
																				'sffz'=>	'empty',
																				'sfp'=>	'empty',
																				'sfpp'=>	'empty',
																				'sfz'=>	'empty');
	static $availableOptions = array('halign' => 'left-center-right',
																		'valign' =>'valign',
																		'placement' => 'above-below',
																		'underline' => 'number-of-lines',
																		'overline' => 'number-of-lines',
																		'line-through' => 'number-of-lines',
																		'enclosure' => 'enclosure-shape',
																		'default-x' => 'tenths',
																	 'default-y' => 'tenths',
																	 'relative-x' => 'tenths',
																	 'relative-y' => 'tenths',
																	 'font-family' => 'comma-separated-text',
																	 'font-style' => 'font-style',
																	 'font-size' => 'font-size',
																	 'font-weight' => 'font-weight',
																	 'color' => 'color');
	function __construct($components, $options = array()) {
		$this->components = $dynamicType;
		$this->options = $options;
		$this->check();
	}

}