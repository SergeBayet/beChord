<?php

class ScorePartwise extends CompoObject {
	static $availableComponents = array('work' => 'work',
																			'movement-number' => 'xs:string',
																			'movement-title' => 'xs:string',
																			'identification' => 'identification',
																			'defaults' => 'defaults',
																			'credit' => 'credit',
																			'part-list' => 'part-list',
																			'part' => 'xs:anyType'
																			);
	static $availableOptions = array('version' => 'xs:token');
	function __construct($components, $options = array()) {
		if(!is_array($components))
		{
			$components = array($components);
		}
		$this->components = $components;
		$this->options = $options;
		$this->check();
	}

	public function toMusicXML() {
		$out = '<?xml version="1.0" encoding="UTF-8"?>
		<!DOCTYPE score-timewise PUBLIC "-//Recordare//DTD MusicXML 3.0 Timewise//EN" "http://www.musicxml.org/dtds/timewise.dtd">';
		$out .= '<score-partwise '.$this->createXMLAttributes($this->options).'>';
		foreach($this->components as $key => $value)
		{
			if(method_exists($value, 'toMusicXML'))
			{
				$out .= $value->toMusicXML();
			}
			else
			{
				$out .= '<'.$key.'>'.$value.'</'.$key.'>';
			}
			
		}
		$out .= '</score-partwise>';
		return $out;
	}
}