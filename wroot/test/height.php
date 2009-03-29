<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Height Demo</title>
<style type="text/css">
<!--
	*{padding:0px; margin:0px; color: white;}
-->
</style>
<script type="text/javascript">
window.onresize = function resizethis()
{
//	var overall = document.getElementById("overall");
	b0dy = document.getElementsByTagName("body")[0];
	b0dy.style.height = window.innerHeight+"px";
	b0dy.style.display = "none";
	b0dy.style.display = "";
}
window.onload = function main()
{
	window.onresize();
}
</script>
</head>

<body style="position: relative; height: 100%;">
	<div style="height: 100%; width: 100%; background-color: orange; position: relative;">
		<div style="width:50%; height: 50%; background-color: blue;"></div>
		<div style="width:50%; height: 50%; background-color: blue; float:right;"></div>
	</div>
</body>
</html>