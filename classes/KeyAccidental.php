<?php 
class KeyAccidental extends CompoObject { 
    protected $textRestriction = 'accidental-value';
    function __construct($text) {
        $this->text = $text;
        $this->check();
    }
}