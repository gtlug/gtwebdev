// JavaScript Document

function recurse(obj)
{
	var r = arguments[1]!==undefined?arguments[1]:String();
	var d = arguments[2]!==undefined?arguments[2]:0;
	var tabs = repeat("\t", d);
	
	for(var i in obj)
	{
		var x = obj[i];
		if(typeof(x) == "object")
		{
			r += tabs + i + " : " + "\n";
			r = recurse(x,r,d+1);
		}
		else
			r += tabs + i + " : " +  x + "\n";
	}
	return r;
}

function repeat(s, n)
{
	var r = String();
	for(var i = 0; i < n; i++)
		r += s;
	return r;
}
