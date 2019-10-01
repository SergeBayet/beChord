<?php 
class BendAlter extends CompoObject { 
    protected $textRestriction = 'semitones';
    function __construct($text) {
        $this->text = $text;
        $this->check();
    }
}