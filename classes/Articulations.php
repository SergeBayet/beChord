<?php

class Articulations extends CompoObject {

	static $availableComponents = array(
		'accent' =>	'empty-placement', 
		'breath-mark' =>	'breath-mark', 
		'caesura' =>	'empty-placement', 
		'detached-legato' =>	'empty-placement', 
		'doit' =>	'empty-line', 
		'falloff' =>	'empty-line', 
		'other-articulation' =>	'placement-text', 
		'plop' =>	'empty-line', 
		'scoop' =>	'empty-line', 
		'spiccato' =>	'empty-placement', 
		'stacatissimo' =>	'empty-placement', 
		'stacatto' =>	'empty-placement', 
		'stress' =>	'empty-placement', 
		'strong-accent' =>	'strong-accent', 
		'tenuto' =>	'empty-placement', 
		'unstress' =>	'empty-placement'

	);

	function __construct ($components = array()) {
		if(!is_array($components))
		{
			$components = array($components); 
		}
		$this->components = $components;
		$this->check();
	}
}