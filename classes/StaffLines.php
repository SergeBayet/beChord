<?php 
class StaffLines extends CompoObject { 
    protected $textRestriction = 'xs:nonNegativeInteger';
    function __construct($text) {
        $this->text = $text;
        $this->check();
    }
}