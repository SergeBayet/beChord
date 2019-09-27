<?php

class Measure extends CompoObject {
	static $availableComponents = array('attributes' => 'attributes',
																			'backup' => 'backup',
																			'barline' => 'barline',
																			'bookmark' => 'bookmark',
																			'direction' => 'direction',
																			'figured-bass' => 'figured-bass',
																			'forward' => 'forward',
																			'grouping' => 'grouping',
																			'harmony' => 'harmony',
																			'link' => 'link',
																			'note' => 'note',
																			'print' => 'print',
																			'sound' => 'sound'
																			);
	static $availableOptions = array('number' => 'xs:token',
																	'implicit' => 'yes-no',
																	 'non-controlling' => 'yes-no',
																	'width' => 'tenths');
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