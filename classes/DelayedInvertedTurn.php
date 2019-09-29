<?php 
class DelayedInvertedTurn extends CompoObject { 
    static $availableOptions = array('default-x' => 'tenths',
                                     'default-y' => 'tenths',
                                     'relative-x' => 'tenths',
                                     'relative-y' => 'tenths',
                                     'font-family' => 'comma-separated-text',
                                     'font-style' => 'font-style',
                                     'font-size' => 'font-size',
                                     'font-weight' => 'font-weight',
                                     'color' => 'color',
                                     'placement' => 'above-below',
                                     'start-note' => 'start-note',
                                     'trill-step' => 'trill-step',
                                     'two-note-turn' => 'two-note-turn',
                                     'accelerate' => 'yes-no',
                                     'beats' => 'trill-beats',
                                     'second-beat' => 'percent',
                                     'last-beat' => 'percent',
                                     'slash' => 'yes-no');
    function __construct($options = array()) {
        $this->options = $options;
        $this->check();
    }
}