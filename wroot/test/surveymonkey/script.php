<?php header("Content-type: text/javascript");
include('CURL.class.php');
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
$content = "";
if(isAllowed($url))
{
	$curl = new CURL();
	$content = $curl->get($url);
}
else
	$content = "/* URL NOT ALLOWED */";
?>/* <?= $url ?> */
function takeSurvey()
{
	<?= $content ?>

}