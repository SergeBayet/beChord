<?php 
class HoleType extends CompoObject { 
    protected $textRestriction = 'xs:string';
    function __construct($text) {
        $this->text = $text;
        $this->check();
    }
}