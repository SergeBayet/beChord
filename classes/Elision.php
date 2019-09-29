<?php 
class Elision extends CompoObject { 
    protected $textRestriction = 'xs:string';
    static $availableOptions = array('font-family' => 'comma-separated-text',
                                     'font-style' => 'font-style',
                                     'font-size' => 'font-size',
                                     'font-weight' => 'font-weight',
                                     'color' => 'color',
                                     'underline' => 'number-of-lines',
                                     'overline' => 'number-of-lines',
                                     'line-through' => 'number-of-lines',
                                     'rotation' => 'rotation-degrees',
                                     'letter-spacing' => 'number-or-normal',
                                     'xml:lang' => 'xs:anySimpleType',
                                     'dir' => 'text-direction');
    function __construct($text, $options = array()) {
        $this->text = $text;
        $this->options = $options;
        $this->check();
    }
}