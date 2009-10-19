<?php 
class Gtwebdev_View_Helper_Widgets_Widget extends Zend_View_Helper_Abstract
{
	protected $_id;
	
	protected $_name;
	
	protected $_content;
	
	protected $_action;
	
	protected $_controller;
	
	protected $_module;
	
	protected $_params;
	
	public function __construct($id, $name, $action, $controller, $module = null, array $params = array())
	{
		$this->_id = $id;
		$this->_name = $name;
		$this->_action = $action;
		$this->_controller = $controller;
		$this->_module = $module;
		$this->_params = $params;
	}
	
	public function getId()
	{
		return $this->_id;
	}
	
	public function getName()
	{
		return $this->_name;
	}
	
	public function getContent()
	{
		if(!$this->_content)
		{
			$this->_content = 
				$this->view->action(
					$this->_action
					, $this->_controller
					, $this->_module
				)
			;
		}
		return $this->_content;
	}
}
?>