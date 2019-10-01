<?php 
class Sign extends CompoObject { 
    protected $textRestriction = 'clef-sign';
    function __construct($text) {
        $this->text = $text;
        $this->check();
    }
}