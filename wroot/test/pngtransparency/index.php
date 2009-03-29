<?php if(isset($_GET['text']) && $_GET['text']) header('content-type: text/plain'); ?>
<DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>PNG Transparency Test</title>
<style type="text/css">

/* !!!  YOU NEED THIS SECTION FOR IT TO WORK  !!! */
img 
{
	behavior: url("png.htc");
}
/**/

body
{
	background-color: #33CCFF;
}
</style>   
</head>
<body>
<h1>PNG Transparency Test</h1>

<h2>Items Needed</h2>
<ul>
	<li>PNG image w/ gradient (no indexed colors)</li>
	<li><a href="png.htc">png.htc</a> &mdash; The magic file that fixes PNGs</li>
	<li><a href="blank.gif">blank.gif</a> &mdash; Does something to make transparency</li>
	<li>img CSS behavior property (see source)</li>
</ul>

<h2>Page Source</h2>
<object type="text/plain" data="index.php?text=true" style="width: 500px; height: 300px; background-color: white;">
	<p>Sorry, you <strong>FAIL</strong>.</p>
</object>

<h2>Examples</h2>
<p><img src="png_transparent_img.png" alt="" width="85" height="62" /></p>
<p><img src="png_transparent_img2.png" alt="" width="85" height="62" /></p>
<p><img src="png_transparent_img3.png" alt="" width="100" height="100" /></p>
</body>
</html>
