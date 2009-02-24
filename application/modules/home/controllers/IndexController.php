<?php
require_once("Abstract.php");
class Contact_IndexController extends Login_Controller_Abstract
{
	public function indexAction()
	{
		$this->view->helloWorld = "Howdy All!";
	}
}
?>
