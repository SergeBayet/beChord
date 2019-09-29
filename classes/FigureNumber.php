<?php 
class FigureNumber extends CompoObject { 
    protected $textRestriction = 'xs:string';
    static $availableOptions = array('default-x' => 'tenths',
                                     'default-y' => 'tenths',
                                     'relative-x' => 'tenths',
                                     'relative-y' => 'tenths',
                                     'font-family' => 'comma-separated-text',
                                     'font-style' => 'font-style',
                                     'font-size' => 'font-size',
                                     'font-weight' => 'font-weight',
                                     'color' => 'color');
    function __construct($text, $options = array()) {
        $this->text = $text;
        $this->options = $options;
        $this->check();
    }
}