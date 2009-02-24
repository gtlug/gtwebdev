<?php
require_once("Abstract.php");
class ErrorController extends Controller_Abstract
{
	public function indexAction()
	{
		if(null !== ($errors = $this->_getParam('error_handler')))
		{
			switch ($errors->type) 
			{
				case Zend_Controller_Plugin_ErrorHandler::EXCEPTION_NO_CONTROLLER:
				case Zend_Controller_Plugin_ErrorHandler::EXCEPTION_NO_ACTION:
					// 404 error -- controller or action not found
					$this->getResponse()->setRawHeader('HTTP/1.1 404 Not Found');
			
					// ... get some output to display...
				break;
				case Zend_Controller_Plugin_ErrorHandler::EXCEPTION_OTHER:
				default:
					// application error; display error page, but don't change
					// status code
			
					// ...
			
					// Log the exception:
					$e = $errors->exception;
					Zend_Registry::get('logger')->log($e->getMessage(), Zend_Log::NOTICE);
				break;
			}
		}
	}
}
?>
