<?php
class Gtwebdev_Service_Flickr_Auth
{
	/**
	 * 
	 * @var DOMDocument
	 */
	protected $_dom;
	private $_xml;
	
	/**
	 * 
	 * @var Gtwebdev_Service_Flickr
	 */
	protected $_flickr;
	
	
	public function __construct(DOMDocument $dom, $flickr)
	{
		$this->_dom = $dom;
		$this->_flickr = $flickr;
	}
	
	protected function _getElement($name, $returnValue = true)
	{
		$xpath = new DOMXPath($this->_dom);
        $element = $xpath->query("//$name")->item(0);
        
        return $returnValue ? $element->nodeValue : $element;
	}
	
	public function getToken()
	{
		return $this->_getElement('token');
	}
	
	public function getPerms()
	{
		return $this->_getElement('perms');
	}
	
	public function getUser()
	{
		$user = $this->_getElement('user', false);
		$attribs = array(
			'nsid','username','fullname'
		);
		$result = array();
		foreach($attribs as $attrib)
		{
			$attrib = $user->getAttribute($attrib);
		}
		return $result;
	}
	
    public function __sleep()
    {
    	$this->_xml = $this->_dom->saveXML();
        return array('_flickr', '_xml');
    }
    
    public function __wakeup()
    {
        $this->_dom = new DOMDocument();
        $this->_dom->loadXML($this->_xml);
    }
	
}