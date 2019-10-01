<?php
class _Debug extends CompoObject {

	public function getMissingComponentsClass() {
		$parent = "CompoObject";
		$complexElements = array();
		$simpleElements = array();
		$types = array();
    foreach (get_declared_classes() as $class) {
				
				if (is_subclass_of($class, $parent))
				{
					
					//echo '<h1>'.$class.'</h1>';
					$vars = get_class_vars($class);
					
					if(isset($vars['availableComponents']))
					{
						foreach($vars['availableComponents'] as $key => $val)
						{
							$keyClass = $this->elementNameToClassName($key);
							$valClass = $this->elementNameToClassName($val);
							if(!class_exists($keyClass))
							{
								
								if(!isset(CompoValues::$values[$val]) && !class_exists($valClass))
								{
									if(isset(CompoValues::$complexValues[$val]))
									{
										// Create Class dynamically with complex values. text only
										$complexElements[] = $keyClass.' : '.$val;
										//$out = $this->createDynamicClass($keyClass, $val);
										//echo '<pre>'.$out.'</pre>';
									}
									else
									{
										$complexValueToCreate[] = $val;
									}
								}
								else
								{
									if(class_exists($valClass) && !isset(CompoValues::$values[$val]))
									{
										$simpleElements[] = $keyClass.' : '.$val;
									}
									else
									{
										// Create Class dynamically with simple value (empty)
										//$simpleElements[] = $keyClass.' : '.$val;
										$out = $this->createSimpleDynamicClass($keyClass, $val);
										echo '<pre>'.$out.'</pre>';
									}
								}
							}
							
						}
					}
				}
		}
		
    return ['simpleElements' => array_unique($simpleElements), 'complexElements' => array_unique($complexElements)];
	}
	private function createSimpleDynamicClass($class, $val)
	{
		$attributes = CompoValues::$values[$val];
		
		$out = '';
		$out = "<?php \r\n";
		$out .= "class $class extends CompoObject { \r\n";
		
		if($val !== 'empty')
		{
			$out .=  "    protected \$textRestriction = '".$val."';\r\n";
		
			$out .=  "    function __construct(\$text) {\r\n";
			$out .= "        \$this->text = \$text;\r\n";
			$out .= "        \$this->check();\r\n";
		}
		else
		{
			$out .= "    function __construct() {\r\n";
			$out .= "        \$this->check();\r\n";
		}

		$out .= "    }\r\n";
		$out .= "}";
		
		file_put_contents(__DIR__."/../dynamic/".$class.".php", $out);
		
		return $out;
	}
	private function createDynamicClass($class, $val)
	{
		$attributes = CompoValues::$complexValues[$val];
		$out = '';
		$out = "<?php \r\n";
		$out .= "class $class extends CompoObject { \r\n";
		
		if($attributes['derivedBy'] !== 'empty')
		{
			$out .=  "    protected \$textRestriction = '".$attributes['derivedBy']."';\r\n";
		}
		$out .= "    static \$availableOptions = array(";
		$counter = 0;
		foreach($attributes as $key => $attribute)
		{
			if($counter == count($attributes)-1) break;
			if($counter == count($attributes)-2)
			{
				$out .= "'".$key."' => '".$attribute."');\r\n";
			}
			else
			{
				$out .= "'".$key."' => '".$attribute."',\r\n                                     ";
			}
			$counter++;
		}
		if($attributes['derivedBy'] !== 'empty')
		{
			$out .=  "    function __construct(\$text, \$options = array()) {\r\n";
			$out .= "        \$this->text = \$text;\r\n";
			$out .= "        \$this->options = \$options;\r\n";
			$out .= "        \$this->check();\r\n";
		}
		else
		{
			$out .= "    function __construct(\$options = array()) {\r\n";
			$out .= "        \$this->options = \$options;\r\n";
			$out .= "        \$this->check();\r\n";
		}

		$out .= "    }\r\n";
		$out .= "}";
		
		file_put_contents(__DIR__."/../dynamic/".$class.".php", $out);
		
		return $out;
	}
}

?>