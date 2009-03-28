<?php
require_once("Abstract.php");
class Home_IndexController extends Home_Controller_Abstract
{
	public function indexAction()
	{
		$this->view->helloWorld = "Howdy All!";
	}
}
?>
