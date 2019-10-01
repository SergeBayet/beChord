<?php 
class Pan extends CompoObject { 
    protected $textRestriction = 'rotation-degrees';
    function __construct($text) {
        $this->text = $text;
        $this->check();
    }
}