<?php 
class FrameStrings extends CompoObject { 
    protected $textRestriction = 'xs:positiveInteger';
    function __construct($text) {
        $this->text = $text;
        $this->check();
    }
}