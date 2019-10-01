<?php 
class Capo extends CompoObject { 
    protected $textRestriction = 'xs:nonNegativeInteger';
    function __construct($text) {
        $this->text = $text;
        $this->check();
    }
}