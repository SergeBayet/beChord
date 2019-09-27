<?php

class Beam extends CompoObject {
	protected $textRestriction = 'beam-value';
	static $availableOptions = array('number' => 'beam-level',
																	 'repeater' => 'yes-no',
																	 'fan' => 'fan',
																	 'color' => 'color'
																	 );
	function __construct($text, $options = array())
	{
		$this->text = $text;
		$this->options = $options;
		$this->check();
	}
}