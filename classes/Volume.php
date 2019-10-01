<?php 
class Volume extends CompoObject { 
    protected $textRestriction = 'percent';
    function __construct($text) {
        $this->text = $text;
        $this->check();
    }
}