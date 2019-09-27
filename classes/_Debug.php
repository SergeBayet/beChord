<?php
class _Debug {

	public function getMissingComponentsClass() {
		$parent = "CompoObject";
		$complexElements = array();
		$simpleElements = array();
    foreach (get_declared_classes() as $class) {
				
				if (is_subclass_of($class, $parent))
				{
					
					//echo '<h1>'.$class.'</h1>';
					$vars = get_class_vars($class);
					
					if(isset($vars['availableComponents']))
					{
						foreach($vars['availableComponents'] as $key => $val)
						{
							
							if($key == $val)
							{
								$re = '/-(.)/m';
								$subst = '\\u$1';

								$val = ucfirst(preg_replace_callback($re, function($word) {
										return strtoupper($word[1]);
									}, $val ));

								
								if (!class_exists($val) && !class_exists($val."_")) {
								
									$complexElements[] = $val;
								}
								
							}
							else
							{
								$simpleElements[] = array('class' => $class, 'element' => $val);
							}
						}
					}
				}
    }
    return ['complex' => $complexElements, 'simple' => $simpleElements];
}
}

?>