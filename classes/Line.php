<?php 
class Line extends CompoObject { 
    protected $textRestriction = 'staff-line';
    function __construct($text) {
        $this->text = $text;
        $this->check();
    }
}