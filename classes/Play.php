<?php

class Play extends CompoObject {
	static $availableComponents = array('ipa' => 'xs:string',
																			'mute' => 'mute',
																			'other-play' => 'other-play',
																			'semi-pitched' => 'semi-pitched'
																			);
	static $availableOptions = array('id' => 'xs:IDREF');
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