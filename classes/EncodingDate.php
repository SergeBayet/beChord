<?php 
class EncodingDate extends CompoObject { 
    protected $textRestriction = 'yyyy-mm-dd';
    function __construct($text) {
        $this->text = $text;
        $this->check();
    }
}