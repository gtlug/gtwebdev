<?php
class Gtwebdev_Auth extends Zend_Auth
{
	protected static $_instances = array();
	
	public static $defaultName = 'default';
	
	/**
	 * 
	 * @param string $name
	 * @return Zend_Auth
	 */
	public static function getInstance($name = null)
	{
		if(null === $name)
		{
			$name = self::$defaultName;
		}
		
		if(!isset(self::$_instances[$name]))
		{
			self::$_instances[$name] = new self();
		}
		
		return self::$_instances[$name];
	}
}