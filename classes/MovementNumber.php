<?php 
class MovementNumber extends CompoObject { 
    protected $textRestriction = 'xs:string';
    function __construct($text) {
        $this->text = $text;
        $this->check();
    }
}