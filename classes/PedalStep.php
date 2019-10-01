<?php 
class PedalStep extends CompoObject { 
    protected $textRestriction = 'step';
    function __construct($text) {
        $this->text = $text;
        $this->check();
    }
}