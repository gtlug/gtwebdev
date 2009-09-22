<?php 
/**
 * 
 *
 */
class Gtwebdev_Exception extends Exception
{
	/**
	 * Get a Java-style exception stack trace 
	 * with all useful information formatted 
	 * into a human readable string.
	 * 
	 * @param Exception $e
	 * @return string formated stack trace   
	 */
	public static function format(Exception $e)
	{
		return 
			$e->getMessage() . 
			" in " . $e->getFile() . 
			" on line " . $e->getLine() . 
			"\n" . $e->getTraceAsString()
		;
	}
}
?>