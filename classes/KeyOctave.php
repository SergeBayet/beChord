<?php

class KeyOctave extends CompoObject {
	protected $textRestriction = 'octave';
	static $availableComponents = array();
	static $availableOptions = array('number' => 'xs:positiveInteger',
																	 'cancel' => 'yes-no');
	function __construct($text, $options = array())
	{
		$this->text = $text;
		$this->options = $options;
		$this->check();
	}

}