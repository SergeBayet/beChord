<?php

class Instrument extends CompoObject {
	
	static $instruments = array(
		'Piano' => array('name' => 'Piano',
										 'tessitura' => 'C-2 => C7',
										 'transpose' => 0,
										 'family' => 'keyboard',
										 'abbreviation' => 'Piano'),
		'Piccolo' => array('name' => 'Piccolo',
											'tessitura' => 'D4 => C7',
											'transpose' => 12,
											'family' => 'wood',
										'abbreviation' => 'Pic.'),
		'Grande Flûte' => array('name' => 'Grande Flûte',
											'tessitura' => 'B2 => C6',
											'transpose' => 0,
											'family' => 'wood',
											'abbreviation' => 'Fl.'),
		'Flûte en sol' => array('name' => array('Flute en sol', 'Flute alto'),
											'tessitura' => 'G2 => G5',
											'transpose' => -5,
											'family' => 'wood'),
		'Hautbois' => array('name' => 'Hautbois',
											'tessitura' => 'Bb2 => A5',
											'transpose' => 0,
											'abbreviation' => 'Hb.')
		
	);
	
	function __construct($name, $tessitura = null, $transpose = 0, $family = null)
	{
		$this->name = $name;
		$this->tessitura = $tessitura;
		$this->transpose = $transpose;
		$this->family = $family;
	}

	public static function constructFromName($name)
	{
		dump($name);
		dump(in_array($name,self::$instruments));
		if(isset(self::$instruments[$name])) {
			
			$tessitura = Tessitura::constructFromString(self::$instruments[$name]['tessitura']);
			$transpose = self::$instruments[$name]['transpose'];
			$family = self::$instruments[$name]['family'];
			return new Instrument($name, $tessitura, $transpose, $family);
		}
	}
}