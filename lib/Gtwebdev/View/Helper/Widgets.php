<?php
class Gtwebdev_View_Helper_Widgets extends Zend_View_Helper_Abstract
{
	protected $_containers = array();
	
	protected $_containerClass = 'Gtwebdev_View_Helper_Widgets_Container';

	protected $_baseRegKey = 'Gtwebdev_View_Helper_Widgets';
	
	public function &widgets($containerName = 'default')
	{
		// i.e. Gtwebdev_View_Helper_Widgets_Default
		$regKey = $this->_baseRegKey . "_" . ucfirst($containerName);
		return $this->getContainer($regKey);
	}
	
	public function &getContainer($regKey)
	{
		if(!isset($this->_containers[$regKey]))
		{
			$this->_containers[$regKey] = 
				new $this->_containerClass($regKey);
			;
			$this->_containers[$regKey]->setView($this->view);
		}
		return $this->_containers[$regKey];
	}
}
?>