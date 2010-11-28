<?php
class Gtwebdev_Service_Flickr extends Zend_Service_Flickr
{

	const PERMS_READ = 'read';
	const PERMS_WRITE = 'write';
	const PERMS_DELETE = 'delete';
	
	public $token = null;
	public $secret = null;
	
	public static function checkErrors($dom)
	{
		return self::_checkErrors($dom);
	}
	
    /**
     * Find Flickr photos by tag.
     *
     * Query options include:
     *
     *  # per_page:        how many results to return per query
     *  # page:            the starting page offset.  first result will be (page - 1) * per_page + 1
     *  # tag_mode:        Either 'any' for an OR combination of tags,
     *                     or 'all' for an AND combination. Default is 'any'.
     *  # min_upload_date: Minimum upload date to search on.  Date should be a unix timestamp.
     *  # max_upload_date: Maximum upload date to search on.  Date should be a unix timestamp.
     *  # min_taken_date:  Minimum upload date to search on.  Date should be a MySQL datetime.
     *  # max_taken_date:  Maximum upload date to search on.  Date should be a MySQL datetime.
     *
     * @param  string|array $query   A single tag or an array of tags.
     * @param  array        $options Additional parameters to refine your query.
     * @return Zend_Service_Flickr_ResultSet
     * @throws Zend_Service_Exception
     */
    public function authenticationUrl($secret, $frob = null, $perms = self::PERMS_READ, array $options = array())
    {
    	static $baseUrl = "http://flickr.com/services/auth/?";
        $defaultOptions = array(
        	'api_key' => $this->apiKey,
           	'frob' => (null !== $frob) ? $frob : ($frob = $this->getFrob($secret)),
        	'perms' => (string)$perms
        );
        $options = array_merge($defaultOptions, $options);
        $options = $this->signOptions($secret, $options);

        $url = $baseUrl . http_build_query($options);

        return $url;
    }
    
    /**
     * Find Flickr photos by tag.
     *
     * Query options include:
     *
     *  # per_page:        how many results to return per query
     *  # page:            the starting page offset.  first result will be (page - 1) * per_page + 1
     *  # tag_mode:        Either 'any' for an OR combination of tags,
     *                     or 'all' for an AND combination. Default is 'any'.
     *  # min_upload_date: Minimum upload date to search on.  Date should be a unix timestamp.
     *  # max_upload_date: Maximum upload date to search on.  Date should be a unix timestamp.
     *  # min_taken_date:  Minimum upload date to search on.  Date should be a MySQL datetime.
     *  # max_taken_date:  Maximum upload date to search on.  Date should be a MySQL datetime.
     *
     * @param  string|array $query   A single tag or an array of tags.
     * @param  array        $options Additional parameters to refine your query.
     * @return Zend_Service_Flickr_ResultSet
     * @throws Zend_Service_Exception
     */
    public function getFrob($secret = null, array $options = array())
    {
    	if(null === $secret)
    	{
    		$secret = $this->secret;
    	} 
        static $method = 'flickr.auth.getFrob';
        static $defaultOptions = array();

        $options = $this->_prepareOptions($method, $options, $defaultOptions);
        $options = $this->signOptions($secret, $options);

        // now search for photos
        $restClient = $this->getRestClient();
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

        self::_checkErrors($dom);

        $xpath = new DOMXPath($dom);
        $frob = $xpath->query('//frob')->item(0);
        
        return $frob->nodeValue;
    }
    
    /**
     * Find Flickr photos by tag.
     *
     * Query options include:
     *
     *  # per_page:        how many results to return per query
     *  # page:            the starting page offset.  first result will be (page - 1) * per_page + 1
     *  # tag_mode:        Either 'any' for an OR combination of tags,
     *                     or 'all' for an AND combination. Default is 'any'.
     *  # min_upload_date: Minimum upload date to search on.  Date should be a unix timestamp.
     *  # max_upload_date: Maximum upload date to search on.  Date should be a unix timestamp.
     *  # min_taken_date:  Minimum upload date to search on.  Date should be a MySQL datetime.
     *  # max_taken_date:  Maximum upload date to search on.  Date should be a MySQL datetime.
     *
     * @param  string|array $query   A single tag or an array of tags.
     * @param  array        $options Additional parameters to refine your query.
     * @return DOMDocument
     * @throws Zend_Service_Exception
     */
    public function getToken($secret, $frob = null, array $options = array())
    {
        static $method = 'flickr.auth.getToken';
        $defaultOptions = array(
        	'frob' => (null !== $frob) ? $frob : ($frob = $this->getFrob($secret))
        );

        $options = $this->_prepareOptions($method, $options, $defaultOptions);
        $options = $this->signOptions($secret, $options);

        // now search for photos
        $restClient = $this->getRestClient();
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

        self::_checkErrors($dom);
        
        return new Gtwebdev_Service_Flickr_Auth($dom, $this);
    }
    
    public function signOptions($secret, $options)
    {
    	/* FROM: http://www.flickr.com/services/api/auth.spec.html
		 * Sort your argument list into alphabetical order based on the parameter name.
	     * e.g. foo=1, bar=2, baz=3 sorts to bar=2, baz=3, foo=1
	     * concatenate the shared secret and argument name-value pairs
	     * e.g. SECRETbar2baz3foo1
	     * calculate the md5() hash of this string
	     * append this value to the argument list with the name api_sig, in hexidecimal string form
	     * e.g. api_sig=1f3870be274f6c49b3e31a0c6728957f
		 */

    	// just in case options was already signed
    	unset($options['api_sig']);
    	
    	$phrase = "";
    	ksort($options);
    	foreach($options as $k=>$v)
    		$phrase .= "$k$v";
    		
    	$apiSig = md5($secret . $phrase);
    	$options['api_sig'] = $apiSig;
    	return $options;
    }

    /**
     * Find Flickr photos by tag.
     *
     * Query options include:
     *
     *  # per_page:        how many results to return per query
     *  # page:            the starting page offset.  first result will be (page - 1) * per_page + 1
     *  # tag_mode:        Either 'any' for an OR combination of tags,
     *                     or 'all' for an AND combination. Default is 'any'.
     *  # min_upload_date: Minimum upload date to search on.  Date should be a unix timestamp.
     *  # max_upload_date: Maximum upload date to search on.  Date should be a unix timestamp.
     *  # min_taken_date:  Minimum upload date to search on.  Date should be a MySQL datetime.
     *  # max_taken_date:  Maximum upload date to search on.  Date should be a MySQL datetime.
     *
     * @param  string|array $query   A single tag or an array of tags.
     * @param  array        $options Additional parameters to refine your query.
     * @return Zend_Service_Flickr_ResultSet
     * @throws Zend_Service_Exception
     */
    public function privateTagSearch($query, $secret, array $options = array())
    {
        static $method = 'flickr.photos.search';
        static $defaultOptions = array('per_page' => 10,
                                       'page'     => 1,
                                       'tag_mode' => 'or',
                                       'extras'   => 'license, date_upload, date_taken, owner_name, icon_server');

        $options['tags'] = is_array($query) ? implode(',', $query) : $query;

        $options = $this->_prepareOptions($method, $options, $defaultOptions);

        $this->_validateTagSearch($options);
        $options = $this->signOptions($secret, $options);

        // now search for photos
        $restClient = $this->getRestClient();
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

        self::_checkErrors($dom);

        /**
         * @see Zend_Service_Flickr_ResultSet
         */
        require_once 'Zend/Service/Flickr/ResultSet.php';
        return new Zend_Service_Flickr_ResultSet($dom, $this);
    }
    
   /**
     * Returns Flickr photo details by for the given photo ID
     *
     * @param  string $id the NSID
     * @return array of Zend_Service_Flickr_Image, details for the specified image
     * @throws Zend_Service_Exception
     */
    public function getImageDetails($id)
    {
    	if(!$this->token)
    	{
    		return parent::getImageDetails($id);
    	}
    	
        static $method = 'flickr.photos.getSizes';

        if (empty($id)) {
            /**
             * @see Zend_Service_Exception
             */
            require_once 'Zend/Service/Exception.php';
            throw new Zend_Service_Exception('You must supply a photo ID');
        }
        $options = array(
        	'api_key' => $this->apiKey,
        	'auth_token' => $this->token, 
        	'method' => $method, 
        	'photo_id' => $id
        );
        $options = $this->signOptions($this->secret, $options);

        $restClient = $this->getRestClient();
        $restClient->getHttpClient()->resetParameters();
        $response = $restClient->restGet('/services/rest/', $options);

        $dom = new DOMDocument();
        $dom->loadXML($response->getBody());
        $xpath = new DOMXPath($dom);
        self::_checkErrors($dom);
        $retval = array();
        /**
         * @see Zend_Service_Flickr_Image
         */
        require_once 'Zend/Service/Flickr/Image.php';
        foreach ($xpath->query('//size') as $size) {
            $label = (string) $size->getAttribute('label');
            $retval[$label] = new Zend_Service_Flickr_Image($size);
        }

        return $retval;
    }
}