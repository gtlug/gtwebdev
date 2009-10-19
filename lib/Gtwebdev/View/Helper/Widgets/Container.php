<?php
class Gtwebdev_View_Helper_Widgets_Container extends Zend_View_Helper_Placeholder_Container_Standalone
{
	const REQUIRED_FIELDS = array(
		'id'
		, 'name'
		, 'action'
		, 'controller'
		, 'module'
	);
	
	/**
     * Registry key for placeholder
     * @var string
     */
    protected $_regKey = 'Gtwebdev_View_Helper_Widgets_Container';
	
    public function __construct($regKey)
    {
    	$this->_regKey = $regKey;
    	$this->setRegistry(Zend_View_Helper_Placeholder_Registry::getRegistry());
        $this->setContainer($this->getRegistry()->getContainer($this->_regKey));
    }
    
    protected function _parseConfig(Zend_Config $config, $append = true)
    {
    	$methodName = $append ? 'append' : 'prepend';
    	foreach($config as $widgetData)
    	{
    		foreach(self::REQUIRED_FIELDS as $requiredField)
    		{
    			if(!isset($widgetData->$requiredField))
    			{
    				throw new Exception("Missing required field '$requiredField'");
    			}
    		}
    		if(!isset($widgetData->params))
    		{
    			$widgetData->params = array();
    		}
    		$this->$methodName(
    			$widgetData->id
    			, $widgetData->name
    			, $widgetData->action
    			, $widgetData->controller
    			, $widgetData->module
    			, $widgetData->params
    		);
    	}
    }
    
	/**
	 * @param string $name
	 * @param string $url
	 * @return void
	 */
	public function append($id, $name = null, $action = null, $controller = null, $module = null, array $params = array())
	{
		if($id instanceof Zend_Config)
		{
			$this->_parseConfig($id);
			return $this;
		}
		
		$widget = $this->_createWidget($id, $name, $action, $controller, $module, $params);
		return $this->getContainer()->append($widget);
	}
	
	/**
	 * @param string $name
	 * @param string $url
	 * @return void
	 */
	public function prepend($id, $name = null, $action = null, $controller = null, $module = null, array $params = array())
	{
		if($id instanceof Zend_Config)
		{
			$this->_parseConfig($id, false);
			return $this;
		}
		
		$widget = $this->_createWidget($id, $name, $action, $controller, $module, $params);
		return $this->getContainer()->prepend($widget);
	}
	
	protected function _createWidget($id, $name = null, $action = null, $controller = null, $module = null, array $params = array())
	{
		if($id instanceof Gtwebdev_View_Helper_Widgets_Widget)
		{
			return $id;
		}
		$widget = new Gtwebdev_View_Helper_Widgets_Widget(
			$id, $name, $action, $controller, $module, $params
		);
		$widget->setView($this->view);
		return $widget;
	}
}