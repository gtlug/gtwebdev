<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Classfull Programming</title>
<script src="/js/prototype.js" type="text/javascript"></script>
<script type="text/javascript">
<!--
function checkRequired()
{
	required = $$(".required");
	for(var i = 0; i < required.length; i++)
		if($F(required[i]) == "")	// $F() == $().value
			return required[i];
	return false;
}

Event.observe(window, 'load', function (event)
{
	Event.observe('my_form', 'submit', function (event)
	{
		var missing = false;
		if(missing = checkRequired())
		{
			alert("Missing Required Fields");
			missing.focus();
			Event.stop(event);
		}
	});
});

-->
</script>
</head>

<body>
<form id="my_form" action="classfull.php" method="post">
<table id="user_info" cellpadding="0" cellspacing="0" border="0">
<thead><tr><th colspan="2">User Information:</th></tr></thead>
<tfoot>
	<tr>
		<td colspan="2"><em>* Required</em></td>
	</tr>
</tfoot>
<tbody>
	<tr>
		<th><label for="username">Username*:</label></th>
		<td><input type="text" class="text required" id="username" name="username" /></td>
	</tr>
	<tr>
		<th><label for="password">Password*:</label></th>
		<td><input type="password" class="password required" id="password" name="password" /></td>
	</tr>
	<tr>
		<th><label for="username">Favorite Color:</label></th>
		<td><input type="text" class="text" id="color" name="color" /></td>
	</tr>
</tbody>
</table>
<button type="reset">Reset</button><button type="submit">Submit</button>
</form>
</body>
</html>
