<?php
function getPastebinPosts($url, $pop = true)
{
	$raw = file_get_contents($url);
	$regex = "/\<h1\>Recent\ Posts\<\/h1\>\s*(<ul\>[^\3]*<\/ul\>)/iU";
	preg_match($regex, $raw, $results);
	$xml = new SimpleXMLElement($results[1]);
	$posts = array();
	for($i = 0; $i < sizeof($xml->li); $i++)
	{
		$a = $xml->li[$i]->a->attributes();
		$posts[$i]['added'] = (string) $xml->li[$i];
		$posts[$i]['href'] = (string) $a['href'];
		$posts[$i]['name'] = (string) $xml->li[$i]->a;
	}
	if($pop) array_pop($posts);
	return $posts;
}

$posts = getPastebinPosts("http://gtwebdev.pastebin.com/");

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>GTWebDev Pastebin Posts</title>
</head>

<body>
<h1><a href="http://gtwebdev.pastebin.com/" target="_blank">GTWebDev Pastebin</a> Posts</h1>
<ul>
<?php for($i = 0; $i < sizeof($posts); $i++) { ?>
	<li><a href="<?= $posts[$i]['href'] ?>"><?= $posts[$i]['name'] ?></a> (Posted: <strong><?= $posts[$i]['added'] ?></strong>)</li>
<?php } ?>
</ul>
</body>
</html>