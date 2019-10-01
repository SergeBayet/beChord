<?php 
class MidiProgram extends CompoObject { 
    protected $textRestriction = 'midi-128';
    function __construct($text) {
        $this->text = $text;
        $this->check();
    }
}