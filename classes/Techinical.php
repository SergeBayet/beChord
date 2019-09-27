<?php

class Technical extends CompoObject {
	static $availableComponents = array('arrow' => 'arrow',
																			'bend' => 'bend',
																			'double-tongue' => 'empty-placement',
																			'down-bow' => 'empty-placement',
																			'fingering' => 'fingering',
																			'fingernails' => 'empty-placement',
																			'fret' => 'fret',
																			'hammer-on' => 'hammer-on-pull-off',
																			'handbell' => 'handbell',
																			'harmonic' => 'harmonic',
																			'heel' => 'heel-toe',
																			'hole' => 'hole',
																			'open-string' => 'empty-placement',
																			'other-technical' => 'placement-text',
																			'pluck' => 'placement-text',
																			'pull-off' => 'hammer-on-pull-off',
																			'snap-pizzicato' => 'empty-placement',
																			'stopped' => 'empty-placement',
																			'string' => 'string',
																			'tap' => 'placement-text',
																			'thumb-position' => 'empty-placement',
																			'toe' => 'heel-toe',
																			'triple-tongue' => 'empty-placement',
																			'up-bow' => 'empty-placement'

																			);
	static $availableOptions = array();
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