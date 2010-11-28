<?php
class Gtwebdev_Auth_Adapter_Flickr implements Zend_Auth_Adapter_Interface
{
	/**
	 * 
	 * @var Gtwebdev_Service_Flickr
	 */
	protected $_flickr;
	
	/**
	 * 
	 * @var string
	 */
	protected $_secret;
	
	protected $_frob;
	
	protected $_options;
	
	public function __construct($flickr, $secret, $frob = null, $options = array())
	{
		$this->_flickr = $flickr;
		$this->_secret = $secret;
		$this->_frob = $frob;
		$this->_options = $options;
	}
	
	
    /**
     * Performs an authentication attempt
     *
     * @throws Zend_Auth_Adapter_Exception If authentication cannot be performed
     * @return Zend_Auth_Result
     */
    public function authenticate()
    {
    	$auth = null;
    	try
    	{
    		$auth = $this->_flickr->getToken($this->_secret, $this->_frob, $this->_options);
    	}
    	catch(Exception $e)
    	{
    		return new Zend_Auth_Result(Zend_Auth_Result::FAILURE, null, array($e->getMessage(), $e->getTraceAsString()));
    	}
    	
    	if(!$auth)
    	{
    		return new Zend_Auth_Result(Zend_Auth_Result::FAILURE, null, "Failed Authentication");
    	}
    	
    	return new Zend_Auth_Result(Zend_Auth_Result::SUCCESS, $auth);
    }
}