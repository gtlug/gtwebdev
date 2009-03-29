<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Cherryland Electric Cooperative - Energy Audit</title>

<meta http-equiv="content-type" content="text/html; charset=windows-1252" />
<link href="/cecstyle.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
// round to 2 decimal places
function round(x) {
	return Math.round(x*1000)/1000;
}

function cost(x) {
	return Math.round(x*100)/100;
}

function Calc(form)
{
varRate = .0854
form.AUReq.value = round(100000 / ((form.AESSEff.value/100) * 100000))
form.ACost.value = "$" + cost(form.APrice.value * form.AUReq.value)
form.BUReq.value = round(100000 / ((form.BESSEff.value/100) * 91600))
form.BCost.value = "$" + cost(form.BPrice.value * form.BUReq.value)
form.CUReq.value = round(100000 / ((form.CESSEff.value/100) * 138000))
form.CCost.value = "$" + cost(form.CPrice.value * form.CUReq.value)
form.DUReq.value = round(100000 / ((form.DESSEff.value/100) * 6800))
form.DCost.value = "$" + cost(form.DPrice.value * form.DUReq.value)
form.EUReq.value = round(100000 / ((form.EESSEff.value/100) * 8200))
form.ECost.value = "$" + cost(form.EPrice.value * form.EUReq.value)
form.FUReq.value = round(100000 / ((form.FESSEff.value/100) * 3413))
form.FCost.value = "$" + cost(form.FPrice.value * form.FUReq.value)
form.GUReq.value = round(100000 / ((form.GESSEff.value/100) * 3413))
form.GCost.value = "$" + cost(form.GPrice.value * form.GUReq.value)
form.HUReq.value = round(100000 / ((form.HESSEff.value/100) * 3413))
form.HCost.value = "$" + cost(form.HPrice.value * form.HUReq.value)
form.IUReq.value = round(100000 / ((form.IESSEff.value/100) * 3413))
form.ICost.value = "$" + cost(form.IPrice.value * form.IUReq.value)
form.JUReq.value = round(100000 / ((form.JESSEff.value/100) * 3413))
form.JCost.value = "$" + cost(form.JPrice.value * form.JUReq.value)
form.KUReq.value = round(100000 / ((form.KESSEff.value/100) * 3413))
form.KCost.value = "$" + cost(form.KPrice.value * form.KUReq.value)
}
window.onload = function () {
	sfHover();
	//
	var form = document.getElementById('calculatorForm');
	Calc(form);
};

</script>

<script type="text/javascript">
<!--

function PrintIt(form)
{
 document.bgColor = "#FFFFFF"; 
 document.fgColor = "#000000";
 document.linkColor = "#000000";
 document.vlinkColor = "#000000";
 document.alinkColor = "#000000";
 document.body.background = "";
 
 focus(form)
 print(form)

}

//-->
</script>
<script type="text/javascript"><!--//--><![CDATA[//><!--

sfHover = function() {
	var sfEls = document.getElementById("nav1").getElementsByTagName("LI");
	for (var i=0; i<sfEls.length; i++) {
		sfEls[i].onmouseover=function() {
			this.className+=" sfhover";
		}
		sfEls[i].onmouseout=function() {
			this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
		}
	}
}
if (window.attachEvent) window.attachEvent("onload", sfHover);

//--><!]]></script>


</head>

<body><div align="center" class="container">


	<table cellpadding="0" cellspacing="0" border="0" width="1000" bgcolor="#FFFFFF">
	

<tr> 

<td height="20" align="left"><font size="-2"><a href="/inc/screen.cfm">&nbsp;&nbsp;Set Default Screen Width</a></font></td>
<td height="20" align="right">
<font size="-2"><a href="/">Home</a>&nbsp;|&nbsp;<a href="/outage/outage.cfm">Outages</a>&nbsp;|&nbsp;<a href="https://secure.cecelec.com/css/" target="_blank">Access My Account</a>&nbsp;|&nbsp;<a href="/coop-advantage/contact.cfm">Contact Us&nbsp;|&nbsp;<a href="/sitemap.cfm">Site Map</a> &nbsp;&nbsp;&nbsp;</a></td></tr>

<tr height="2"> 
      <td colspan="2" height="1" bgColor="#CC0000"><img src="/images/2h.gif"></td>
    </tr><tr><td colspan="2">

<table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td colspan="3">

<table width="100%" cellpadding="0" cellspacing="0" border="0"><tr>


	<td valign="center" background="/images/feederbanner.jpg" height="119px">
	

<table width="100%" height="119px"><tr><td width="150px">&nbsp;</td><td width="300px" align="left" valign="bottom"><font style="font-family: arial ;font-size: 14px ;">Tuesday, March&nbsp;3,&nbsp;2009&nbsp;&nbsp;&nbsp;1:44 PM</font></td><td>&nbsp;</td></tr></table></td></tr>


<tr height="2"> 
      <td colspan="2" height="1" bgColor="#CC0000"><img src="/images/2h.gif"></td>
    </tr>
<tr><td colspan="2">
<table width="100%" cellpadding="0" cellspacing="0" border="0"><tr>
<td>
<ul id="nav1">
	<li><a href="https://secure.cecelec.com/css/" target="_blank">Account&nbsp;Access</a></li>

	<li><a href="#">Electric</a>

		<ul>
			<li><a href="/rates/">Rates And Regulatory</a></li>
			<li><a href="/coop-advantage/counties.cfm">Service Area</a></li>
			<li><a href="/fuelmix.cfm">Environmental</a></li>
			<li><a href="http://cis.state.mi.us/mpsc/electric/restruct/glossary.htm" target="_blank">Customer Choice</a></li>
			<li><a href="http://www.michigan.gov/mpsc" target="_blank">MPSC</a></li>

			<li><a href="/outage/">Outage</a></li>
			<li><a href="/engineering/treetrim.cfm">Tree Trimming</a></li>
			
		</ul>
	</li>
	<li><a href="#">Cooperative</a>

		<ul>
			<li><a href="/coop-advantage/">What's a Cooperative</a></li>

			<li><a href="https://touchstoneenergy.cooperative.com/public/programs/energyefficiency/lblfiles/launch.htm" target="_blank">Online Energy Audit</a></li>
			<li><a href="/coop-advantage/bylaws.pdf" target="_blank">Bylaws</a></li>
			<li><a href="/minutes/index.cfm">Meeting Minutes</a></li>
			<li><a href="/coop-advantage/index.cfm">Capital Credits</a></li>
			<li><a href="/coop-advantage/board.cfm">Directors</a></li>
			<li><a href="/coop-advantage/">Annual Meeting</a></li>

			<li><a href="http://www.jobtarget.com/c/copro.cfm?site_id=227&co=28364" target="_blank">Employment Opportunities</a></li>
			<li><a href="/longdistance/">Long Distance & Internet</a></li>
		</ul>
	</li>

	<li><a href="#">Community</a>
		<ul>

			<li><a href="/education/index.cfm">Fun and Games</a></li>
			<li><a href="/memberprograms/roundup.cfm">Community Caring</a></li>
			<li><a href="/memberprograms/scholarship.cfm">Member Scholarships</a></li>
			<li><a href="http://www.countrylines.com" target="_blank">Country Lines</a></li>
			<li><a href="http://www.sitesacrossamerica.com/display_sitelist_search.php?searchtype=&site_id=&searchname=&exactname=no&searchstate=&searchcity=&exactcity=no&searchnpa=&searchzip=&searchzip2digit=&searchcoop=112&searchprice=&searchacre=&searchsqft=&status1=Active&status2=Sold&status3=Leased&criteria=+and+&submit=Find+Sites+and%2For+Buildings" target="_blank">Sites Across America / Real Estate</a></li>
		</ul>

	</li>

	<li><a href="/coop-advantage/contact.cfm">Contact&nbsp;Us</a></li>

	<li><a href="/">Home</a></li>


</ul>
</div>
</td></tr></table>
</td></tr>

<tr height="2"> 
      <td colspan="2" height="1" bgColor="#CC0000"><img src="/images/2h.gif"></td>
    </tr></table>
</td></tr>
<tr><td width="155px" valign="top">

<table width="155px" cellpadding="0" cellspacing="0" border="0"><tr><td><center>


<br><a href="/eo/index.cfm"><img src="/graphics/renew-energy.jpg" border="0" /></a>

<br><br><a href="http://www.wolverinecleanenergy.com/" target="_blank"><img src="/images/wcev.gif" border="0"></a><br><br>
<a href="https://touchstoneenergy.cooperative.com/public/programs/energyefficiency/lblfiles/launch.htm" target="_blank"><img src="/images/tse-homeenergyaudit.jpg" border="0"></a><br><br>
<a href="http://www.touchstoneenergykids.com" target="_blank"><img src="/images/TS_KidsZone_logo.jpg" border="0"></a>
</center></td></tr></table>
</font>

<img src="/images/150space.gif"></td><td valign="top" align="left">


<style type="text/css">
td.chartwb	{ color: ffffff; font-family: Arial, geneva, san-serif; font-size: 8pt; font-weight: bold; text-decoration: none}


</style>

<!-- : : : HEADER : : : -->
<h3>Fuel Source Heat Comparison</h3>
<!-- : : : END HEADER : : : -->
<table cellpadding="0" cellspacing="0" border="0">
<tr>
<td>
<!-- : : : CONTENT : : : -->
<form method="get" action="" onsubmit="Calc(this)" id="calculatorForm">
<!-- : : : PART ONE : : : -->
<table border="0" cellpadding="2" cellspacing="1" align="center">

<tr bgcolor="#FFFFFF">
<td colspan="8">
<h4>Fuel Source Heat Calculator</h4>
<P class="news">
Use this handy calculator to calculate energy cost and usage.   
Simply fill in the white boxes, then scroll down and press "calculate."<br /><br />
</P>
</td>
</tr>
<tr bgcolor="#ff0000">
<td class="chartwb">Fuel Source</td>
<td class="chartwb">Fuel<br />Unit</td>
<td class="chartwb">BTU's<br />per Unit</td>

<td class="chartwb">Units<br />per 100,000<br />BTU's</td>
<td class="chartwb">Energy<br />Star<br />System<br />Efficiency</td>
<td class="chartwb">Units<br />Required<br />to produce<br />100,000 BTU's</td>
<td class="chartwb">Current<br />Price<br />per Unit</td>

<td class="chartwb">Cost of<br />100,000 BTU's<br />of Heat</td>
</tr>
<tr bgcolor="#FF9999">
<td class="chartwb">Natural Gas</td>
<td class="chartwb">CCF</td>
<td class="chartwb">100,000</td>
<td class="chartwb">1.00</td>
<td class="chartwb"><input type="text" name="AESSEff" size="5" class="Outbox" value="90" />%</td>
<td class="chartwb"><input style="background-color:ff9999" type="text" name="AUReq" size="5" class="chartwb" readonly="readonly"  /></td>

<td class="chartwb"><input type="text" name="APrice" size="5" class="Outbox" value="1.03" /></td>
<td class="chartwb"><input type="text" name="ACost" size="5" class="chartwb" readonly="readonly" /></td>
</tr>
<tr bgcolor="#FF9999">
<td class="chartwb">Propane</td>
<td class="chartwb">Gallon</td>
<td class="chartwb">91,600</td>
<td class="chartwb">1.09</td>
<td class="chartwb"><input type="text" name="BESSEff" size="5" class="Outbox" value="80">%</td>
<td class="chartwb"><input type="text" name="BUReq" size="5" class="chartwb" readonly="readonly" /></td>
<td class="chartwb"><input type="text" name="BPrice" size="5" class="Outbox" value="2.40"></td>
<td class="chartwb"><input type="text" name="BCost" size="5" class="chartwb" readonly="readonly" /></td>

</tr>
<tr bgcolor="#FF9999">
<td class="chartwb">Fuel Oil</td>
<td class="chartwb">Gallon</td>
<td class="chartwb">138,000</td>
<td class="chartwb">0.72</td>
<td class="chartwb"><input type="text" name="CESSEff" size="5" class="Outbox" value="83">%</td>
<td class="chartwb"><input type="text" name="CUReq" size="5" class="chartwb" readonly="readonly" /></td>
<td class="chartwb"><input type="text" name="CPrice" size="5" class="Outbox" value="2.2090"></td>
<td class="chartwb"><input type="text" name="CCost" size="5" class="chartwb" readonly="readonly" /></td>
</tr>
<tr bgcolor="#FF9999">

<td class="chartwb">Corn</td>
<td class="chartwb">lb</td>
<td class="chartwb">6,800</td>
<td class="chartwb">14.71</td>
<td class="chartwb"><input type="text" name="DESSEff" size="5" class="Outbox" value="60">%</td>
<td class="chartwb"><input type="text" name="DUReq" size="5" class="chartwb" readonly="readonly" /></td>
<td class="chartwb"><input type="text" name="DPrice" size="5" class="Outbox" value=".1225"></td>
<td class="chartwb"><input type="text" name="DCost" size="5" class="chartwb" readonly="readonly" /></td>
</tr>
<tr bgcolor="#FF9999">
<td class="chartwb">Wood Pellets</td>

<td class="chartwb">lb</td>
<td class="chartwb">8,200</td>
<td class="chartwb">12.20</td>
<td class="chartwb"><input type="text" name="EESSEff" size="5" class="Outbox" value="60">%</td>
<td class="chartwb"><input type="text" name="EUReq" size="5" class="chartwb" readonly="readonly" /></td>
<td class="chartwb"><input type="text" name="EPrice" size="5" class="Outbox" value=".1150"></td>
<td class="chartwb"><input type="text" name="ECost" size="5" class="chartwb" readonly="readonly" /></td>
</tr>
<tr bgcolor="FF0000">
<td class="chartwb" colspan="8">Electric - 8.205 cents</td>
</tr>
<tr bgcolor="#FF9999">

<td class="chartwb">Resistance</td>
<td class="chartwb">kWh</td>
<td class="chartwb">3,413</td>
<td class="chartwb">29.30</td>
<td class="chartwb"><input type="text" name="FESSEff" size="5" class="Outbox" value="100">%</td>
<td class="chartwb"><input type="text" name="FUReq" size="5" class="chartwb" readonly="readonly" /></td>
<td class="chartwb"><input type="text" name="FPrice" size="5" class="Outbox" value=".08205"></td>
<td class="chartwb"><input type="text" name="FCost" size="5" class="chartwb" readonly="readonly" /></td>
</tr>
<tr bgcolor="#FF9999">
<td class="chartwb">Heat Pump (Air-to-Air)</td>

<td class="chartwb">kWh</td>
<td class="chartwb">3,413</td>
<td class="chartwb">29.30</td>
<td class="chartwb"><input type="text" name="GESSEff" size="5" class="Outbox" value="260">%</td>
<td class="chartwb"><input type="text" name="GUReq" size="5" class="chartwb" readonly="readonly" /></td>
<td class="chartwb"><input type="text" name="GPrice" size="5" class="Outbox" value=".08205"></td>
<td class="chartwb"><input type="text" name="GCost" size="5" class="chartwb" readonly="readonly" /></td>
</tr>
<tr bgcolor="#FF9999">
<td class="chartwb">Heat Pump Water Source (Closed Loop)</td>
<td class="chartwb">kWh</td>

<td class="chartwb">3,413</td>
<td class="chartwb">29.30</td>
<td class="chartwb"><input type="text" name="HESSEff" size="5" class="Outbox" value="400">%</td>
<td class="chartwb"><input type="text" name="HUReq" size="5" class="chartwb" readonly="readonly" /></td>
<td class="chartwb"><input type="text" name="HPrice" size="5" class="Outbox" value=".08205"></td>
<td class="chartwb"><input type="text" name="HCost" size="5" class="chartwb" readonly="readonly" /></td>
</tr>
<tr bgcolor="FF0000">
<td class="chartwb" colspan="8">Electric Interruptible - 4.75 cents</td>
</tr>
<tr bgcolor="#FF9999">
<td class="chartwb">Resistance</td>

<td class="chartwb">kWh</td>
<td class="chartwb">3,413</td>
<td class="chartwb">29.30</td>
<td class="chartwb"><input type="text" name="IESSEff" size="5" class="Outbox" value="100">%</td>
<td class="chartwb"><input type="text" name="IUReq" size="5" class="chartwb" readonly="readonly" /></td>
<td class="chartwb"><input type="text" name="IPrice" size="5" class="Outbox" value=".0475"></td>
<td class="chartwb"><input type="text" name="ICost" size="5" class="chartwb" readonly="readonly" /></td>
</tr>
<tr bgcolor="#FF9999">
<td class="chartwb">Heat Pump (Air-to-Air)</td>
<td class="chartwb">kWh</td>

<td class="chartwb">3,413</td>
<td class="chartwb">29.30</td>
<td class="chartwb"><input type="text" name="JESSEff" size="5" class="Outbox" value="260">%</td>
<td class="chartwb"><input type="text" name="JUReq" size="5" class="chartwb" readonly="readonly" /></td>
<td class="chartwb"><input type="text" name="JPrice" size="5" class="Outbox" value=".0475"></td>
<td class="chartwb"><input type="text" name="JCost" size="5" class="chartwb" readonly="readonly" /></td>
</tr>
<tr bgcolor="#FF9999">
<td class="chartwb">Heat Pump Water Source (Closed Loop)</td>
<td class="chartwb">kWh</td>
<td class="chartwb">3,413</td>

<td class="chartwb">29.30</td>
<td class="chartwb"><input type="text" name="KESSEff" size="5" class="Outbox" value="400">%</td>
<td class="chartwb"><input type="text" name="KUReq" size="5" class="chartwb" readonly="readonly" /></td>
<td class="chartwb"><input type="text" name="KPrice" size="5" class="Outbox" value=".0475"></td>
<td class="chartwb"><input type="text" name="KCost" size="5" class="chartwb" readonly="readonly" /></td>
</tr>

</table>
<p align="center"><font size="-2">Current Price per Unit accurate as of 1/16/2009.</font></p>
<P align="center">
<input type="reset" value="Clear" class="bttn">&nbsp; &nbsp;
<input type="button" value="Calculate" onClick="Calc(this.form)" class="bttn">&nbsp; &nbsp;

<input type="button" value="Print" onClick="PrintIt(this.form)" class="bttn">
</P>
</form>

<P>
</td>
</tr>
</table>


	<img src="/images/spacer690.gif"></td>
	

<td width="155px" valign="top" align="right" cellpadding="0" cellspacing="0" border="0"><center>
<object width="150" height="225">

<param name="movie" value="/images/rotateimg.swf">
<embed src="/images/rotateimg.swf" width="150" height="225">
</embed>
</object>
</center>
<br /><a href="http://www.connections.coop/index.php?coopID=26" target="surf"><img src="/graphics/CherrylandCardFr.jpg" border="0"></a><br>
<font size="-2"><center> <a href="http://www.rxpricequotes.com" target="_blank">Click HERE to find participating Pharmacies and compare Drug Prices for the Co-op Connections Pharmacy Benefit</a></center></font><br><a href="https://secure.cecelec.com/css"><img src="/images/billing3.jpg" border="0"></a></td>
 		</tr>
	  </table>

<br /><br /><br />
<table width="100%" border="0" cellPadding="0" cellSpacing="0">
  <tbody>

    <tr height="2"> 
      <td colspan="2" height="1" bgColor="#CC0000"><img src="/images/2h.gif"></td>
    </tr>
	
    <tr height=28> 
      <td height="134"> 
        <div align="center"><h5>Cherryland Electric Cooperative reminds you... Three Full Working Days before you dig, Call MISS DIG at 1 (800) 482-7171</h5>
          <p align="center"><font size="-1" face="Arial, Helvetica, sans-serif"><strong> 
            <br>
            Office Hours</strong><br>
            Monday - Friday<br>

            7:00 AM - 4:00 PM</font></p>
          <p align="center"><font size="-1" face="Arial, Helvetica, sans-serif"><a href="mailto:cec@cecelec.com">cec@cecelec.com</a></font></p>
          <p align="center"><font size="-1" face="Arial, Helvetica, sans-serif">Contents © 
            2007 Cherryland Electric Cooperative<BR>
            5930 US 31 South,  PO Box 298, Grawn, MI 49637, (231) 486-9200, (800) 442-8616</font><br><br>
            <a href="https://ssl.cecelec.com"><font style="font-family: tahoma;font-size: 10px ;color:;">Intranet</font></a><br><br></p>
<font Size="-2">
	
    	<b><a href="http://www.cecelec.com">www.cecelec.com</a><br />69.223.24.72</b>

	
</font>
			
        </div></td>
    </tr>
  </tbody>
</table></td></tr></table></div>


<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-1291990-1");
pageTracker._trackPageview();
</script>

</body>
</html>


