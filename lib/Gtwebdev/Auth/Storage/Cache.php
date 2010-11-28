<?php
/**
 * @see Zend_Auth_Storage_Interface
 */
require_once 'Zend/Auth/Storage/Interface.php';


class Gtwebdev_Auth_Storage_Cache implements Zend_Auth_Storage_Interface
{
	/**
	 * 
	 * @var Zend_Cache_Core
	 */
	protected $_cache = null;
	
	protected $_cacheId = null;
	
	protected $_tags;
	
	protected $_specificLifetime;
	
	protected $_priority;
	
	public function __construct($cache, $cacheId, $tags = array(), $specificLifetime = false, $priority = 8)
	{
		$this->_cache = $cache;
		$this->_cacheId = $cacheId;
		$this->_tags = $tags;
		$this->_specificLifetime = $specificLifetime;
		$this->_priority = $priority;
	}
	
    /**
     * Returns true if and only if storage is empty
     *
     * @throws Zend_Auth_Storage_Exception If it is impossible to determine whether storage is empty
     * @return boolean
     */
    public function isEmpty()
    {
    	return !$this->_cache->test($this->_cacheId);
    }

    /**
     * Returns the contents of storage
     *
     * Behavior is undefined when storage is empty.
     *
     * @throws Zend_Auth_Storage_Exception If reading contents from storage is impossible
     * @return mixed
     */
    public function read()
    {
    	return $this->_cache->load($this->_cacheId);
    }

    /**
     * Writes $contents to storage
     *
     * @param  mixed $contents
     * @throws Zend_Auth_Storage_Exception If writing $contents to storage is impossible
     * @return void
     */
    public function write($contents)
    {
    	return $this->_cache->save($contents, $this->_cacheId, $this->_tags, $this->_specificLifetime, $this->_priority);
    }

    /**
     * Clears contents from storage
     *
     * @throws Zend_Auth_Storage_Exception If clearing contents from storage is impossible
     * @return void
     */
    public function clear()
    {
    	return $this->_cache->remove($this->_cacheId);
    }
}
    