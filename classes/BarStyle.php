<?php 
class BarStyle extends CompoObject { 
    protected $textRestriction = 'bar-style';
    static $availableOptions = array('color' => 'color');
    function __construct($text, $options = array()) {
        $this->text = $text;
        $this->options = $options;
        $this->check();
    }
}