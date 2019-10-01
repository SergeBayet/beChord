<?php 
class Diatonic extends CompoObject { 
    protected $textRestriction = 'xs:integer';
    function __construct($text) {
        $this->text = $text;
        $this->check();
    }
}