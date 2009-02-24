<?php
	/*
	 * Bootstrap File
	 * NOTE: ORDER IS IMPORTANT!
	 */

	//header("content-type: text/plain");
	if(isset($_SERVER['INCLUDE_PATH']))
		set_include_path($_SERVER['INCLUDE_PATH']);

	// This class includes a lot of useful classes,
	// and basically sets us up to do everything Zend from here on in
	require_once 'Zend/Controller/Front.php';

	// allow lazy class loading
	Zend_Loader::registerAutoload();

	// Force all errors to throw Exceptions
	/*function exception_error_handler($errno, $errstr, $errfile, $errline ) 
	{
		if($errno < E_WARNING)
			throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
	}
	set_error_handler("exception_error_handler");*/
	
	$site_root = realpath(isset($_SERVER['SITE_ROOT'])?$_SERVER['SITE_ROOT']:$_SERVER['DOCUMENT_ROOT'] . "/../") . "/";
	Zend_Registry::set('site_root',$site_root);
		
	// setup error logger
	$logger = new Zend_Log(new Zend_Log_Writer_Stream($site_root. 'var/log/error.log'));
	Zend_Registry::set('logger',$logger);
	
	// load static configs and put in registry
	$siteconfig = new Zend_Config_Ini($site_root. 'etc/siteconfig.ini', 'site');
	$dbconfig = new Zend_Config_Ini($site_root. 'etc/dbconfig.ini', $siteconfig->site->runmode);
	Zend_Registry::set('siteconfig',$siteconfig);
	Zend_Registry::set('dbconfig',$dbconfig);
	
	// setup database singletons (so the session handlers can use one of them) 
	$db = Zend_Db::factory($dbconfig->db->adapter, $dbconfig->db->config->toArray());

	// check connections before we proceed
	try 
	{
	    $db->getConnection();
	}
	catch (Zend_Db_Adapter_Exception $e) 
	{
		$logger->log(Vp_Util::formatException($e), Zend_Log::NOTICE);
	    // perhaps a failed login credential, or perhaps the RDBMS is not running
	}
	
	Zend_Registry::set('db',$db);
	

	// assemble session namespaces
	try
	{
		$session = new Zend_Session_Namespace('default'); 
	}
	catch(Exception $e)
	{
		$logger->log(Vp_Util::formatException($e), Zend_Log::EMERG);
		return;
	}
	Zend_Registry::set('session',$session);


	//
	// Now that we've got all the infrastructure stuff done,
	// we can get to more usefull things, like loading the 
	// appropriate pages
	//
	//Zend_Controller_Front::run('/path/to/app/controllers');
	$appication_root = $site_root. 'application/';
	Zend_Registry::set('application_root', $appication_root);
	
	// Setup view object
	$view = new Zend_View();
	$view->addHelperPath('Demo/View/Helper/', 'Demo_View_Helper_');
	$view->addBasePath($appication_root . 'views');
	Zend_Registry::set('view',$view);

	$front = Zend_Controller_Front::getInstance();
	$front->addModuleDirectory($appication_root . 'modules');
	$front->addControllerDirectory($appication_root . 'controllers', 'default');
	$front->setParam('view', $view);
	//$front->setParam('useDefaultControllerAlways', true);
	
	$viewRenderer = new Zend_Controller_Action_Helper_ViewRenderer($view, array(
		'viewSuffix' => 'html.php'
	));
	Zend_Controller_Action_HelperBroker::addHelper($viewRenderer);
	
	$contexts = new Zend_Config_Ini('../etc/contexts.ini');
	$contextSwitch = new Zend_Controller_Action_Helper_ContextSwitch();
	$contextSwitch->setContexts($contexts->toArray());
	Zend_Controller_Action_HelperBroker::addHelper($contextSwitch);
	
	Zend_Layout::startMvc(array(
		'layout'		=> 'default',
		'layoutPath'	=> $appication_root . 'layouts',
		'viewSuffix'	=> 'html.php'
	));
	$view = null;
	$view = Zend_Layout::getMvcInstance()->getView();
	$view->addHelperPath('Demo/View/Helper/', 'Demo_View_Helper_');
	Zend_Layout::getMvcInstance()->setView($view);
	$layout_defaults = new Zend_Config_Ini($site_root. 'etc/siteconfig.ini', 'layout');
	foreach($layout_defaults->toArray() as $key=>$val)
		Zend_Layout::getMvcInstance()->$key = $val;
	
	// Dispatch our application
	try
	{
		$response = $front->dispatch();
	}
	catch(Exception $e)
	{
		$logger->log(Vp_Util::formatException($e), Zend_Log::ALERT);
		header('Location: /error');
		return;
	}
	
	// Peform any last tasks prior to sending response to client


	
	// Finally send the response
	print $response;
?>
