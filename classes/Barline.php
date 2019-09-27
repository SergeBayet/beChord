<?php

class Barline extends CompoObject {
	protected $options;
	protected $components;
	static $availableComponents = array('bar-style' => 'bar-style-color',
																			'wavy-line' => 'wavy-line',
																			'segno' => 'segno',
																			'coda' => 'coda',
																			'fermata' => 'fermata',
																			'ending' => 'ending',
																			'repeat' => 'repeat'
																			);
	static $availableOptions = array('location' => 'right-left-middle',
																	'segno' => 'xs-token',
																	 'coda' => 'xs-token',
																	'divisions' => 'divisions');
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