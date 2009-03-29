<?php
class Sample
{
	protected $_allowed = array(
		'foo',
		'bar',
		'baz'
	);
	
	public function __set($var, $val)
	{
		// don't allow variables to be set with underscore prefix
		if("_"==$var[0]) return;
		
		$this->$var = $val;
	}
	
	public function __call($method, $args)
	{
		// set.*($args)
		if ('set' == substr($method, 0, 3))
			// Only allow setting of allowed variables
			if(in_array($var = substr($method, 3), $this->_allowed))
				__set($var, $args);
	}
}
?>