<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>event.keyCode Utility</title>
<script src="/js/prototype.js" type="text/javascript" language="javascript"></script>
<script type="text/javascript" language="javascript">
<!--
Event.observe(window, 'load', function (event)
{
	Event.observe(window, 'keydown', function (event)
	{
		$(document.body).innerHTML = event.keyCode;
	});	
});
//-->
</script>
<style type="text/css">
<!--
body
{
	position: absolute;
	top: 0px;
	bottom: 0px;
	left: 0px;
	right: 0px;
	text-align: center;
	vertical-align: middle;
	font-size: 200px;
}
-->
</style>
</head>

<body>Press Any Key...</body>
</html>
