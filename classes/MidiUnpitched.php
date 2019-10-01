<?php 
class MidiUnpitched extends CompoObject { 
    protected $textRestriction = 'midi-128';
    function __construct($text) {
        $this->text = $text;
        $this->check();
    }
}