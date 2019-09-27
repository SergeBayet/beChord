<?php

class NoteSize extends CompoObject {
	static $availableComponents = array();
	static $availableOptions = array('type' => 'note-size-type');
	function __construct($options = array()) {
		
		$this->options = $options;
		$this->check();
	}

}