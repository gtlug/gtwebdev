<?php
$xml = new SimpleXMLElement("http://wjr.us/feed/", null, true);
$alt = true; // alternating bit
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>wjr.us</title>
<link rel="alternate" type="application/rss+xml" title="GTLUG Link Stream" href="http://wjr.us/feed/" />
<style type="text/css">
<!--
body{padding:5px;background:rgb(252,255,128);font:12px arial,helvetica,clean,sans-serif;*font-size:small;*font:x-small;}
a{font:14px arial,helvetica,clean,sans-serif;*font-size:small;*font:x-small;color:rgb(0,0,0);font-weight:bold;text-decoration:none;}
a:hover{font:14px arial,helvetica,clean,sans-serif;*font-size:small;*font:x-small;color:rgb(252,252,252);background:rgb(0,0,0);font-weight:bold;text-decoration:none;}
h1,h2,h3,h4,div,p{ padding: 0px; margin: 0px;}
h1{float: left; padding: 0px; margin: 0px;}
h1 a{ background: url(http://wjr.us/wjrus.jpg) no-repeat; display: block;height: 77px;width: 277px;}
h1 a span{display: none;}
h2{text-align:center;font-size:24px;font-weight:bold;text-decoration:underline;}
ul{list-style: none;}
li{font-size:14px; display: inline; margin: 5px;}
#links{clear: both; margin-top: 50px;}
#links div { margin-top: 5px; margin-bottom: 5px; border:1px solid black;}
.row0{background:rgb(252,252,252);}
.row1{background:rgb(192,192,192);}
.submission{ margin-top: 5px;}
-->
</style>
</head>

<body>
<h1><a href="http://wjr.us/"><span>wjr.us</span></a></h1>
<h2>10 Latest Links</h2>
<div align="center">
<ul>
	<li>10</li>
	<li><a href="/latest/25">25</a></li>
	<li><a href="/latest/50">50</a></li>
	<li><a href="/latest/100">100</a></li>
</ul>
</div>
<div id="links">
<?php for($i = 0; $i < sizeof($xml->channel->item); $i++) { $alt = !$alt;?>
<div class="row<?= $alt?"1":"0"?>">
	<h3><a href="<?= htmlspecialchars($xml->channel->item[$i]->link) ?>"><span><?= htmlspecialchars($xml->channel->item[$i]->title) ?></span></a></h3>
	<p class="description"><?= htmlspecialchars($xml->channel->item[$i]->description) ?></p>
	<p class="submission">submitted by <strong>\0</strong> (viewed 1 times.)</p>
</div>
<?php } ?>
</div>
</body>
</html>
