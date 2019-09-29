<?php
require_once('classes/Autoloader.php');


foreach (glob("classes/*.php") as $filename)
{
		
    require_once($filename);
}


$score = new ScorePartwise (
	[new PartList(
		[new ScorePart(
			['part-name' => 'Music'],
			['id' => 'P1']
		)]
		), new Part(
			[new Measure(
				[new Attributes(
					[new Divisions(1),
					 new Key(['fifths' => -3]),
					 new Time(['beats' => 4, 'beat-type' => 4]),
					 new Clef(['sign' => 'G', 'line' => 2])	
					]
				),
				new Note(
					[new Pitch(['step' => 'C', 'octave' => 4]),
					 new Duration(2),
					 new Type('half')]
				),
				new Note(
					[new Pitch(['step' => 'D', 'octave' => 4]),
					 new Duration(1),
					 new Type('quarter')]
				),
				new Note(
					[new Pitch(['step' => 'E', 'alter' => '-1', 'octave' => 4]),
					 new Duration(1),
					 new Type('quarter')]
				)],
				['number' => '1']
			)],
			['id' => 'P1']
		)]
);

$dom = new DOMDocument;
$dom->preserveWhiteSpace = FALSE;
$dom->loadXML($score->toMusicXML());
$dom->formatOutput = TRUE;
$xml = $dom->saveXML();
var_dump( $dom->saveXML());
var_dump($score);
file_put_contents("test.xml",$xml);
// $staves= new Staves(3, ['yeah' => '2']);
// $m = new AccordionMiddle('3');
// $d = new Fifths('7');
// dump($m->toMusicXML());
$acc = new Pitch(['step' => 'A', 'alter' => '-4', 'octave' => '5']);
$acc = Pitch::constructFromString('A#5');
dump($acc->toMusicXML());
dump($acc);

// $barline = new Barline(['bar-style' => '1'], ['location' => 'rght', 'segno' => 'S']);
// dump($barline->toMusicXML());

$debug = new _Debug();
dump($debug->getMissingComponentsClass());
die();
$staves= new Staves(3, ['yeah' => '2']);
dump($staves->toMusicXML());
$key = new Key(['fifth' => '3', 'mode' => 'major']);
dump($key->toMusicXML());
$key = new Key(['fifth' => '3', 'mode' => 'major']);
dump($key->toMusicXML());



$time = new Time('3', '4');
$clef = new Clef(['sign' => 'G', 'line' => '2']);
$a = new Attributes(['key' => $key, 'time' => $time, 'divisions' => '2', 'clef' => $clef]);

$dom = new DOMDocument;
$dom->preserveWhiteSpace = FALSE;
$dom->loadXML($a->toMusicXML());
$dom->formatOutput = TRUE;
dump( $dom->saveXML());
die();
dump($a->toMusicXML());

die();

$a = new Interchangeable('6', '8', 'equal');

dump($b->toMusicXML());
$a = new Dynamics('ff');
dump($a->toMusicXML());


$a = new TimeModification('2', '3', 'whole', '');
dump($a->toMusicXML());

$a = new Accidental('sharp', ['cautionary' => 'yes']);
dump($a->toMusicXML());

$a = new Type('512th');
dump($a->toMusicXML());

$a = new Voice(1);
dump($a->toMusicXML());

$a = new Tie(['type' => 'start']);
dump($a->toMusicXML());

$a = new Unpitched('C','5');
dump($a->toMusicXML());

$a = new Rest('C','5',['measure' => 'yes']);
dump($a->toMusicXML());

$a = new Grace(['slash' => 'yes']);
dump($a->toMusicXML());
$a = new Chord();
dump($a->toMusicXML());

$a = new Beam('begin', ['number' => '1']);
dump($a->toMusicXML());

$a = new Backup(16);
dump($a->toMusicXML());

$a = new Arpeggiate([ 'color' => 'blue', 'direction' => 'down']);
dump($a->toMusicXML());

$a = new AccidentalMark('sharp', ['placement' => 'below']);
dump($a->toMusicXML());

$a = new Articulations();
$a->addComponent('stacatto', array('placement' => 'above'));
dump($a->toMusicXML());

$a = Pitch::constructFromString('C#2');
$b = new Pitch('D', 1, 5);

dump($a->toMusicXML());

$tessiture = new Tessitura($a,$b);

$c = new Pitch('F', 0, 3);

$piano = Instrument::constructFromName('Piano');

dump($piano);

// dump($c->isInTessitura($tessiture));

// dump($tessiture->getAllPitches());

//var_dump($a, $a->errorMsg);

function dump($var)
{
	//echo '<pre>' . var_export($var, true) . '</pre>';
	highlight_string("<?php\n\$data =\n" . var_export($var, true) . ";\n?>");
}
?>