<?php 
class Ensemble extends CompoObject { 
    protected $textRestriction = 'positive-integer-or-empty';
    function __construct($text) {
        $this->text = $text;
        $this->check();
    }
}