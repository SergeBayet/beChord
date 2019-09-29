<?php

class StaffDetails extends CompoObject {
	
	static $availableComponents = array('staff-type' => 'staff-type',
																	 'staff-lines' => 'xs:nonNegativeInteger',
																	 'staff-tuning' => 'staff-tuning',
																	 'capo' => 'xs:nonNegativeInteger',
																	 'staff-size' => 'non-negative-decimal');
	static $availableOptions = array('number' => 'staff-number',
																	 'show-frets' => 'show-frets',
																	 'print-object' => 'yes-no',
																	 'print-spacing' => 'yes-no');
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