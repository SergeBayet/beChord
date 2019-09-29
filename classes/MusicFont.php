<?php 
class MusicFont extends CompoObject { 
    static $availableOptions = array('font-family' => 'comma-separated-text',
                                     'font-style' => 'font-style',
                                     'font-size' => 'font-size',
                                     'font-weight' => 'font-weight');
    function __construct($options = array()) {
        $this->options = $options;
        $this->check();
    }
}