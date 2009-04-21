<?php
// we're sending xml back to the client
header('content-type: application/xml');

// get a copy of a GET variables
$get = $_GET;

// make sure it's a valid mode name 
// (i.e. no path characters)
$mode = preg_match("/^\w+$/", $get['mode']) 
	? $get['mode'] 
	: die('FAIL')
;

// variables in $get are used for overrides
// in web service call.  we don't want mode being passed
unset($get['mode']);

// define xml/xsl locations
$xslFilename = "xsl/$mode.xsl";
$configFilename = "xml/$mode.xml";
if(
	!file_exists($xslFilename)
	|| !file_exists($configFilename)
)
	die('INVALID MODE');

// load configuration
$config = new SimpleXMLElement(file_get_contents($configFilename));
$baseUrl = $config['baseUrl'];

// load parameters from xml configuration into an array
$params = array();
foreach($config->param as $param)
	$params[(string)$param['name']] = (string) $param['value'];

// merge params from config and get variables
$params = array_merge($params, $get);

// build query string from parameters
$queryString = "";
foreach($params as $k=>$v)
	$queryString .= "&$k=$v"; 

// fetch XML from web service
$xml = file_get_contents("$baseUrl?$queryString");
if(false === $xml)
	die("COULD NOT FETCH XML");

	
// load source XML into DOM document for transform
$document = new DOMDocument('1.0', 'UTF-8');
try
{
	$document->loadXML($xml);
}
catch(Exception $e)
{
	die($e->getMessage());
}

// debug: see source document XML
//print $document->saveXML(); die();

// load XSL into DOM document for XSLT processor
$xslDocument = new DOMDocument('1.0', 'UTF-8');
$xslDocument->load($xslFilename);

// create XSLT processor and import XSL DOM document
$xsl = new XSLTProcessor();
$xsl->importStylesheet($xslDocument);

// TRANSFORM! (more than meets the eye)
print $xsl->transformToXML($document);
?>