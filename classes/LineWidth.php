<?php 
class LineWidth extends CompoObject { 
    protected $textRestriction = 'tenths';
    function __construct($text) {
        $this->text = $text;
        $this->check();
    }
}