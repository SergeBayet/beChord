<?php 
class StaffSize extends CompoObject { 
    protected $textRestriction = 'non-negative-decimal';
    function __construct($text) {
        $this->text = $text;
        $this->check();
    }
}