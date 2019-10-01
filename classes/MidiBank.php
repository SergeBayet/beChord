<?php 
class MidiBank extends CompoObject { 
    protected $textRestriction = 'midi-16384';
    function __construct($text) {
        $this->text = $text;
        $this->check();
    }
}