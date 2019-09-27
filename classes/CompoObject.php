<?php

class CompoObject
{
    const UNICODE_FLAT = 'E260';
    const UNICODE_NATURAL = 'E261';
    const UNICODE_SHARP = 'E262';
    const UNICODE_DOUBLE_SHARP = 'E263';
    const UNICODE_DOUBLE_FLAT = 'E264';
    const UNICODE_DIMINISHED = 'E870';
    const UNICODE_HALF_DIMINISHED = 'E871';
    const UNICODE_PLUS = 'E872';
    const UNICODE_MINUS = 'E874';
    const UNICODE_MAJ7 = 'E873';
    const OCTAVE_EQUIVALENCE_INTERVAL = 12;
		
		public $errorMsg = array();
		public $error = false;
		protected $text;
		protected $components;
		protected $options;
		protected $textRestriction;
		/**
     * force deep cloning, so a clone of the measure will contain a clone of all its sub-objects as well
     *
     * @return [type] [description]
     */
		
		public function __clone() {
      foreach ($this as $key => $val) {
        if (is_object($val) || (is_array($val))) {
          $this->{$key} = unserialize(serialize($val));
        }
      }
    }
    function setProperty($name, $value) {
      $this->$name = $value;
    }
    /**
     * required because PHP doesn't do modulo correctly with negative numbers.
     */
		public static function _truemod($num, $mod) {
			return (($mod + ($num % $mod)) % $mod);
		}
    /**
     * returns the smaller interval between a and b, in modulo 12 assuming that a is lower than b
     * @return [type]
     */
    public static function _truemodDiff12($a, $b) {
			if($b < $a) {
				[$a, $b] = [$b, $a];
			}
      return self::_truemod($b-$a, 12);
		}
		protected function throwError($msg)
		{
			$this->error = true;
			$this->errorMsg[] = $msg;
		}
		protected function classNameToElementName($className)
		{
			// camel to dashed :

			return  rtrim(
								strtolower(
									preg_replace(
										'/([^A-Z-])([A-Z])/', '$1-$2', 
										$className
									)
								)
								,'_'
							);
			
		}
		protected function elementNameToClassName($elementName)
		{
			$className = str_replace('-', '', ucwords($elementName, '-'));
			if(in_array($className, ['Print', 'String']))
			{
				$className .= '_';
			}
			return $className;
		}
		public function toMusicXML()
		{
			
			$className = get_class($this);
			$elementName = $this->classNameToElementName($className);
			
			// Simple Element! No nesting
			
			if(isset($this->text))
			{
				$out = $this->createXMLElement($elementName, $this->text, $this->options);
				return $out;
			}
			elseif(isset($this->components))
			{
				$out = '';
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
				$out = $this->createXMLElement($elementName, $out, $this->options);
				
				return $out;
			}
			elseif(isset($this->options))
			{
				$out = $this->createXMLElement($elementName, '', $this->options);
				return $out;
			}
		}
		protected function createXMLElement($name, $content, $options)
		{
			$out = '';
			$content = trim($content);
			if($content == '')
			{
				$out .= '<' . $name . $this->createXMLAttributes($options) . '/>';
			}
			else
			{
				$out .= '<' . $name . $this->createXMLAttributes($options) . '>';
				$out .= $content;
				$out .= '</' .$name . '>'; 
			}
			return $out;
		}
		protected function createXMLAttributes($options)
		{
			if(!is_array($options)) return '';
			$out = ' ';
			
			foreach($options as $key => $option)
			{
				$out .= $key.'="'.$option.'" ';
			}
			$out = rtrim($out);
			if($out == ' ') $out = trim($out);
			return $out;
		}
		protected function check()
		{
			$class = get_class($this);
			if($this->text)
			{
				if(!$this->checkTextValue($this->text, $this->textRestriction))
				{
					return false;
				}
			}
			if($this->options)
			{
				if(!$this->checkOptionsValue($this->options, $class::$availableOptions))
				{
					return false;
				}
			}
			if($this->components)
			{

			}
		}
		protected function checkComponentsValue(array $components, array $availableComponents)
		{

		}
		protected function checkOptionsValue(array $options, array $availableOptions)
		{
			
			foreach($options as $key => $option)
			{
				if(!isset($availableOptions[$key]))
				{
					echo 'Option not available!<br/>';
					return false;
				}
				if(!$this->checkTextValue($option, $availableOptions[$key]))
				{
					
					echo 'Value not valid!<br/>';
					return false;
				}
			}
			return true;
		}
		protected function checkTextValue($text, $value)
		{
			
			if(!isset(CompoValues::$values[$value]))
			{
				return false;
			}
			$simpleType = CompoValues::$values[$value];
			switch($simpleType['type'])
			{
				case 'enumeration':
				
					if(!in_array($text,$simpleType['values']))	
					{
						echo 'Value not valid';
						return false;
					}
					break;
				case 'regex':
					$regex = '/^'.$simpleType['values'].'$/';
					
					if(preg_match($regex, $text, $matches) === 0)
					{
						echo 'Value not valid';
						return false;
					}

					break;
				default:
					if(!$this->checkTextValue($text, $simpleType['type'])) {
						return false;
					}
					break;
			}

			return true;
		}
		protected function displayHelp($availableComponents, $availableOptions)
		{
			echo '<h2>'.get_class($this).'</h2>';
			echo '<h3>Available elements</h3>';
			foreach($availableComponents as $key => $ac)
			{
				echo '<p><strong>'.$key.'</strong> : '.$ac.'</p>';
			}
			echo '<h3>Available options</h3>';
			foreach($availableOptions as $key => $ac)
			{
				echo '<p><strong>'.$key.'</strong> : '.$ac.'</p>';
			}
			echo '<h3>Methods</h3>';
			$a = get_class_methods($this);
			foreach($a as $ac)
			{
				echo '<p><strong>'.$ac.'</strong></p>';
			}
			
		}
}
