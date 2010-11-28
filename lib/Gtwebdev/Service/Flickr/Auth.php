<?php
class Gtwebdev_Service_Flickr_Auth
{
	/**
	 * 
	 * @var DOMDocument
	 */
	protected $_dom;
	
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
	
	protected function _get($name, $returnValue = true)
	{
		$xpath = new DOMXPath($this->_dom);
        $element = $xpath->query("//$name")->item(0);
        
        return $returnValue ? $element->nodeValue : $element;
	}
	
	public function getToken()
	{
		return $this->_get('token');
	}
	
	public function getPerms()
	{
		return $this->_get('perms');
	}
	
	public function getUser()
	{
		$user = $this->_get('user', false);
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
	
}