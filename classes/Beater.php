<?php

class Beater extends CompoObject {
	protected $textRestriction = 'beater';
	static $availableComponents = array();
	static $availableOptions = array('tip' => 'tip-direction');
	function __construct($text, $options = array()) {
		$this->text = $text;
		$this->options = $options;
		$this->check();
	}

	public function toMusicXML() {
		$out = '<beater '.$this->createXMLAttributes($this->options).'>';
		$out .= $this->text;
		$out .= '</beater>';
		return $out;
	}
}