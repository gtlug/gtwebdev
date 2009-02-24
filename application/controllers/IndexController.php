<?php
require_once("Abstract.php");
class IndexController extends Controller_Abstract
{
	public function indexAction()
	{
		$this->_redirect('/home');
	}
}
?>
