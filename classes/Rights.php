<?php 
class Rights extends CompoObject { 
    protected $textRestriction = 'xs:string';
    static $availableOptions = array('type' => 'xs:token');
    function __construct($text, $options = array()) {
        $this->text = $text;
        $this->options = $options;
        $this->check();
    }
}