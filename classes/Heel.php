<?php 
class Heel extends CompoObject { 
    static $availableOptions = array('substitution' => 'yes-no',
                                     'default-x' => 'tenths',
                                     'default-y' => 'tenths',
                                     'relative-x' => 'tenths',
                                     'relative-y' => 'tenths',
                                     'font-family' => 'comma-separated-text',
                                     'font-style' => 'font-style',
                                     'font-size' => 'font-size',
                                     'font-weight' => 'font-weight',
                                     'color' => 'color',
                                     'placement' => 'above-below');
    function __construct($options = array()) {
        $this->options = $options;
        $this->check();
    }
}