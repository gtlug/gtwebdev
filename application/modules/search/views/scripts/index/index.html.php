<?php
	$this->layout()->contentHeader = "Search Results";
?>
<form method="get" action="/search" target="_top">
<div style="float:left">
	<input type="hidden" name="domains" value="www.php.net;dev.mysql.com;httpd.apache.org"></input>
	<label for="sbi" style="display: none">Enter your search terms</label>
	<input type="text" name="q" size="31" maxlength="255" value="<?= isset($_GET['q']) ? $_GET['q'] : "" ?>" id="sbi" style="width: 180px;"></input>
	<br/>
	<label for="sbb" style="display: none">Submit search form</label>

	<input type="submit" name="sa" value="Search" id="sbb"></input>
	<a href="http://www.google.com/"><img src="http://www.google.com/logos/Logo_25wht.gif" border="0" alt="Google" align="top"></img></a>
</div>
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

<!-- Google Search Result Snippet Begins -->
<div id="googleSearchUnitIframe" style="clear: left;"></div>

<script type="text/javascript">
<!--
   var googleSearchIframeName = 'googleSearchUnitIframe';
   var googleSearchFrameWidth = 700;
   var googleSearchFrameborder = 0 ;
   var googleSearchDomain = 'www.google.com';
-->
</script>
<script type="text/javascript"
         src="http://www.google.com/afsonline/show_afs_search.js">
</script>