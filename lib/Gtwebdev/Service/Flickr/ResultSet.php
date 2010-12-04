<?php
class Gtwebdev_Service_Flickr_ResultSet extends Zend_Service_Flickr_ResultSet
{
	private $_dom;
	private $_xml;
	private $_flickr;
	
	private $__results;
	
	public function __construct(DOMDocument $dom, Zend_Service_Flickr $flickr)
	{
		parent::__construct($dom, $flickr);
		$this->_dom = $dom;
		$this->_flickr = $flickr;
		
		if(!$this->__results)
			$this->__results= array();
		// force results 
		foreach($this as $n);
	}
	
    /**
     * Implements SeekableIterator::current()
     *
     * @return Zend_Service_Flickr_Result
     */
    public function current()
    {
    	if(!isset($this->__results[$this->key()]))
    	{
    		$this->__results[$this->key()] = new Gtwebdev_Service_Flickr_Result($this->_results->item($this->key()), $this->_flickr);
    	}
        return $this->__results[$this->key()];
    }
    	
    public function __sleep()
    {
    	$this->_xml = $this->_dom->saveXML();
        return array('_flickr', '_xml', '__results');
    }
    
    public function __wakeup()
    {
        $this->_dom = new DOMDocument();
        $this->_dom->loadXML($this->_xml);
        $this->__construct($this->_dom, $this->_flickr);
    }
}