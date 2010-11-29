<?php
class Gtwebdev_Service_Flickr_ResultSet extends Zend_Service_Flickr_ResultSet
{
	private $_dom;
	private $_xml;
	private $_flickr;
	
	public function __construct(DOMDocument $dom, Zend_Service_Flickr $flickr)
	{
		parent::__construct($dom, $flickr);
		$this->_dom = $dom;
		$this->_flickr = $flickr;
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
        $this->__construct($this->_dom, $this->_flickr);
    }
}