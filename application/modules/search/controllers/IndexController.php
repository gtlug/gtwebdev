<?php
require_once("Abstract.php");
class Home_IndexController extends Home_Controller_Abstract
{
	public function init()
	{
		$gtutil = new Gtwebdev_Util;
		
		$gtutil->addLeftContent('Table of Contents', 'toc', 
			'
	         <ul>
	            <li><a href="#welcome">Welcome to GTWebDev</a></li>
	         </ul>
		',-1);
		
		$gtutil->addLeftContent('Latest News','newsbox', 
			'
				<ul>
					<li>2007 Mar 08
						<ul>
							<li><a href="/news#d20070307">Site Moving Servers</a></li>
						</ul>
					</li>
					<li>2007 Mar 07
						<ul>
							<li><a href="/news#d20070307">February GTLUG Outline Up</a></li>
			
						</ul>
					</li>
					<li>2007 Feb 23
						<ul>
							<li><a href="/news#d20070223">Site Up, but Still Under Construction</a></li>
						</ul>
					</li>
				</ul>
		');
		
		$gtutil->addLeftContent('Search Manuals','search', 
			'
				<form method="get" action="http://www.gtwebdev.org/search.php" target="_top">
					<input type="hidden" name="domains" value="www.php.net;dev.mysql.com;httpd.apache.org"></input>
					<label for="sbi" style="display: none">Enter your search terms</label>
					<input type="text" name="q" size="31" maxlength="255" value="" id="sbi" style="width: 180px;"></input>
					<br/>
					<label for="sbb" style="display: none">Submit search form</label>
				
					<input type="submit" name="sa" value="Search" id="sbb"></input>
					<a href="http://www.google.com/"><img src="http://www.google.com/logos/Logo_25wht.gif" border="0" alt="Google" align="top"></img></a>
					<table>
						<tr>
							<td>
								<input type="radio" name="sitesearch" value="www.php.net" id="ss1" checked="checked"></input>
								<label for="ss1" title="Search www.php.net">PHP</label>
							</td>
							<td>
								<input type="radio" name="sitesearch" value="dev.mysql.com" id="ss2"></input>
								<label for="ss2" title="Search dev.mysql.com">MySQL</label>
							</td>
						</tr>
						<tr>
							<td>
								<input type="radio" name="sitesearch" value="httpd.apache.org" id="ss3"></input>
								<label for="ss3" title="Search httpd.apache.org">Apache</label>
							</td>
							<td>
								<input type="radio" name="sitesearch" value="" id="ss0"></input>
								<label for="ss0" title="Search the Web">Web</label>
							</td>
						</tr>
					</table>
					<input type="hidden" name="client" value="pub-3264840329288366"></input>
					<input type="hidden" name="forid" value="1"></input>
					<input type="hidden" name="ie" value="ISO-8859-1"></input>
					<input type="hidden" name="oe" value="ISO-8859-1"></input>
				
					<input type="hidden" name="cof" value="GALT:#008000;GL:1;DIV:#336699;VLC:663399;AH:center;BGC:FFFFFF;LBGC:336699;ALC:0000FF;LC:0000FF;T:000000;GFNT:0000FF;GIMP:0000FF;FORID:11"></input>
					<input type="hidden" name="hl" value="en"></input>
				</form>
		',9);
	
	}
	
	public function indexAction()
	{
		$this->view->helloWorld = "Howdy All!";
	}
}
?>
