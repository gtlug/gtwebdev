<?php
function r()
{
	echo (md5(microtime() . rand()));
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN"
   "http://www.w3.org/TR/html4/frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Frames Galore!</title>
</head>
<frameset cols="50%, 50%">
	<frameset rows="50%, 50%">
		<frame src="frames.php?<?php r(); ?>" />
		<frame src="frames.php?<?php r(); ?>" />
	</frameset>
	<frameset rows="50%, 50%">
		<frame src="frames.php?<?php r(); ?>" />
		<frame src="frames.php?<?php r(); ?>" />
	</frameset>
</frameset>
</html>
