<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BACK&laquo;&laquo; to the Forward</title>
<script type="text/javascript" language="javascript" src="/js/prototype.js"></script>
<script type="text/javascript" language="javascript">
<!--
Event.observe(window, 'load', function()
{
	$('forward').focus();
});
function flop(source, dest)
{
	s = String(source.value);
	d = "";
	for(var i = s.length; i >= 0; --i)
		d += s.charAt(i);
	dest.value = d;
}
//-->

</script>
<style type="text/css">
body, h1,h2,h3,h4,p,div,fieldset,textarea
{
	padding: 0px;
	margin: 0px;
}
body
{
	position: absolute;
	padding: 5px;
	left:0px; right: 0px; top: 0px; bottom: 0px;
}
fieldset
{
	clear:both;
	height:47%;
	position: relative;
	padding: 5px;
}
/*legend { font-weight: bold; }*/
fieldset textarea
{
	position:relative;
	width: 100%;
	height: 90%;
	background-color: black;
	color: lime;
	font-weight: bold;
}
</style>
</head>

<body>
<fieldset><legend>Forward</legend>
	<textarea id="forward" onkeyup="flop($(this), $('backward'));" onfocus="$(this).select()"></textarea>
</fieldset>
<fieldset><legend>Backward</legend>
	<textarea id="backward" onkeyup="flop($(this), $('forward'));" onfocus="$(this).select()"></textarea>
</fieldset>
</body>
</html>
