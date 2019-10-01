<?php 
class PartAbbreviation extends CompoObject { 
    protected $textRestriction = 'part-name';
    function __construct($text) {
        $this->text = $text;
        $this->check();
    }
}