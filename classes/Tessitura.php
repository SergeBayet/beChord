<?php
class Tessitura extends CompoObject {

	function __construct(Pitch $lowPitch, Pitch $highPitch)
	{
		if($lowPitch->isHigherThan($highPitch))
		{
			$this->lowPitch = $highPitch;
			$this->highPitch = $lowPitch;
		}
		else
		{
			$this->lowPitch = $lowPitch;
			$this->highPitch = $highPitch;
		}
	}
	public static function constructFromString ($string) {
		$pitches = explode('=>', $string);
		if(count($pitches) !== 2)
		{
			return false;
		}
		return new Tessitura(Pitch::constructFromString(trim($pitches[0])), 
												 Pitch::constructFromString(trim($pitches[1])));
	}
	public function getAllPitches($preferredAlteration = 1) {
		$interval = $this->lowPitch->interval($this->highPitch);
	
		$pitches = array();
		$low = $this->lowPitch->toNoteNumber();
	
		for($i = $low ; $i <= ($low + $interval) ; $i++)
		{
			$pitch = new Pitch();
			$pitches[] = $pitch->noteNumberToPitch($i, $preferredAlteration);
		}
		return $pitches;
	}
}