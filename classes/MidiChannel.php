<?php 
class MidiChannel extends CompoObject { 
    protected $textRestriction = 'midi-16';
    function __construct($text) {
        $this->text = $text;
        $this->check();
    }
}