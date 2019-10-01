<?php 
class OctaveChange extends CompoObject { 
    protected $textRestriction = 'xs:integer';
    function __construct($text) {
        $this->text = $text;
        $this->check();
    }
}