<?php
/**
 * @see Zend_Paginator_Adapter_Interface
 */
require_once 'Zend/Paginator/Adapter/Interface.php';

class Gtwebdev_Paginator_Adapter_Flickr implements Zend_Paginator_Adapter_Interface
{
	/**
	 * @var Gtwebdev_Service_Flickr
	 */
	protected $_flickr = null;
	
	/**
	 * @var array
	 */
	protected $_options = array();

    /**
     * Item count
     *
     * @var integer
     */
    protected $_count = null;

    /**
     * Constructor.
     *
     * @param Gtwebdev_Service_Flickr $flickr 
     * @param array $options
     * @throws Zend_Paginator_Exception
     */
    public function __construct($flickr, array $options = array())
    {
    	$this->_flickr = $flickr;
    	
    	$defaultOptions = array(
    		'method'   => 'flickr.photos.search',
    		'api_key'  => $flickr->apiKey,
    		'per_page' => 10,
			'page'     => 1,
			'tag_mode' => 'or',
			'extras'   => 'license, date_upload, date_taken, owner_name, icon_server'
    	);
    	
    	if($flickr->token)
    	{
    		$defaultOptions['auth_token'] = $flickr->token;
    	}
    	$options = array_merge($defaultOptions, $options);
    	$this->_options = $options;
    	
    	// pre-fetch for total count
    	$options['per_page'] = 0;
    	$results = $this->_fetch($options);
    	$this->_count = $results->totalResultsAvailable;
    	
        //$this->_iterator = $iterator;
        //$this->_count = count($iterator);
    }
    
    /**
     * 
     * @param array $options
     * @return Zend_Service_Flickr_ResultSet
     */
    protected function _fetch(array $options)
    {
    	$flickr = $this->_flickr;
    	if(isset($options['tags']) && is_array($options['tags']))
    	{
    		$options['tags'] = implode(',', $options['tags']);
    	}
    	
    	if($flickr->secret)
    	{
    		$options = $flickr->signOptions($flickr->secret, $options);
    	}
    	
    	// now search for photos
        $restClient = $flickr->getRestClient();
        $restClient->getHttpClient()->resetParameters();
        $response = $restClient->restGet('/services/rest/', $options);

        if ($response->isError()) {
            /**
             * @see Zend_Service_Exception
             */
            require_once 'Zend/Service/Exception.php';
            throw new Zend_Service_Exception('An error occurred sending request. Status code: '
                                           . $response->getStatus());
        }

        $dom = new DOMDocument();
        $dom->loadXML($response->getBody());

        Gtwebdev_Service_Flickr::checkErrors($dom);

        require_once 'Gtwebdev/Service/Flickr/ResultSet.php';
        return new Gtwebdev_Service_Flickr_ResultSet($dom, $flickr);
    }

    /**
     * Returns an iterator of items for a page, or an empty array.
     *
     * @param  integer $offset Page offset
     * @param  integer $itemCountPerPage Number of items per page
     * @return Zend_Service_Flickr_ResultSet
     */
    public function getItems($offset, $itemCountPerPage)
    {
        if ($this->_count == 0) {
            return array();
        }
        $options = $this->_options;
        $options['page'] = floor($offset / $itemCountPerPage) + 1;
    	$options['per_page'] = $itemCountPerPage;
    	
        return $this->_fetch($options);
    }

    /**
     * Returns the total number of rows in the collection.
     *
     * @return integer
     */
    public function count()
    {
        return $this->_count;
    }
}