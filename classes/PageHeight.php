<?php 
class PageHeight extends CompoObject { 
    protected $textRestriction = 'tenths';
    function __construct($text) {
        $this->text = $text;
        $this->check();
    }
}