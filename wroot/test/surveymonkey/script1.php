<?php
$allowed_urls = array(
	"http://www.surveymonkey.com/"
);
function isAllowed($url)
{
	global $allowed_urls;
	for($i = 0; $i < sizeof($allowed_urls); $i++)
		if(substr($url, 0, strlen($allowed_urls[$i])) == $allowed_urls[$i])
			return true;
	return false;
}
$url = urldecode($_SERVER['QUERY_STRING']);
$content = isAllowed($url)?file_get_contents($url):"/* URL NOT ALLOWED */";
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>&nbsp;</title>
<style type="text/css">body{display:none;}</style>
<script src="http://www.gtwebdev.org/js/prototype.js" type="text/javascript" language="javascript"></script>
</head>

<body><script type="text/javascript"><!--
/* <?= $url ?> */
<?= $content ?>

//--></script></body>
</html>