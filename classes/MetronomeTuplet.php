<?php

class MetronomeTuplet extends CompoObject {
	static $availableComponents = array('actual-notes' => 'xs:nonNegativeInteger',
																			'normal-notes' => 'xs:nonNegativeInteger',
																			'normal-type' => 'note-type-value',
																			'normal-dot' => 'empty'
																			);
	static $availableOptions = array('type' => 'start-stop',
																	 'bracket' => 'yes-no',
																	 'show-number' => 'show-tuplet');
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