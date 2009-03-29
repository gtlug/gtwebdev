<link href="/cecstyle.css" rel="stylesheet" type="text/css">
<SCRIPT language="JavaScript">
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
</SCRIPT>

<SCRIPT language=JavaScript>
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
</SCRIPT>

<html>
<head>

<title> Cherryland Electric Cooperative - Energy Audit</title>

<META http-equiv=Content-Type content="text/html; charset=windows-1252">
<link href="/cecstyle.css" rel="stylesheet" type="text/css" />

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

<TR height="2"> 
      <TD colspan="2" height="1" bgColor="#CC0000"><img src="/images/2h.gif"></TD>
    </TR><tr><td colspan="2">

<table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td colspan="3">

<table width="100%" cellpadding="0" cellspacing="0" border="0"><tr>


	<td valign="center" background="/images/feederbanner.jpg" height="119px">
	

<table width="100%" height="119px"><tr><td width="150px">&nbsp;</td><td width="300px" align="left" valign="bottom"><font style="font-family: arial ;font-size: 14px ;">Tuesday, March&nbsp;3,&nbsp;2009&nbsp;&nbsp;&nbsp;1:44 PM</font></td><td>&nbsp;</td></tr></table></td></tr>


<TR height="2"> 
      <TD colspan="2" height="1" bgColor="#CC0000"><img src="/images/2h.gif"></TD>
    </TR>
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

<TR height="2"> 
      <TD colspan="2" height="1" bgColor="#CC0000"><img src="/images/2h.gif"></TD>
    </TR></table>
</td></tr>
<tr><td width="155px" valign="top">

<table width="155px" cellpadding="0" cellspacing="0" border="0"><tr><Td><center>


<br><a href="/eo/index.cfm"><img src="/graphics/renew-energy.jpg" border="0" /></a>

<br><br><a href="http://www.wolverinecleanenergy.com/" target="_blank"><img src="/images/wcev.gif" border="0"></a><br><br>
<a href="https://touchstoneenergy.cooperative.com/public/programs/energyefficiency/lblfiles/launch.htm" target="_blank"><img src="/images/tse-homeenergyaudit.jpg" border="0"></a><br><br>
<a href="http://www.touchstoneenergykids.com" target="_blank"><img src="/images/TS_KidsZone_logo.jpg" border="0"></a>
</center></Td></tr></table>
</font>

<img src="/images/150space.gif"></td><td valign="top" align="left">


<STYLE>
td.chartwb	{ color: ffffff; font-family: Arial, geneva, san-serif; font-size: 8pt; font-weight: bold; text-decoration: none}


</STYLE>

<!-- : : : HEADER : : : -->
<H3>Fuel Source Heat Comparison</H3>
<!-- : : : END HEADER : : : -->
<TABLE CELLPADDING="0" CELLSPACING="0" BORDER="0">
<TR>
<TD>
<!-- : : : CONTENT : : : -->
<FORM>
<!-- : : : PART ONE : : : -->
<TABLE BORDER="0" CELLPADDING="2" CELLSPACING="1" ALIGN="center">

<TR BGCOLOR="#FFFFFF">
<TD COLSPAN="8">
<H4>Fuel Source Heat Calculator</H4>
<P class="news">
Use this handy calculator to calculate energy cost and usage.   
Simply fill in the white boxes, then scroll down and press "calculate."<br /><br />
</P>
</TD>
</TR>
<TR BGCOLOR="#ff0000">
<TD CLASS="chartwb">Fuel Source</TD>
<TD CLASS="chartwb">Fuel<br />Unit</TD>
<TD CLASS="chartwb">BTU's<br />per Unit</TD>

<TD CLASS="chartwb">Units<br />per 100,000<br />BTU's</TD>
<TD CLASS="chartwb">Energy<br />Star<br />System<br />Efficiency</TD>
<td class="chartwb">Units<br />Required<br />to produce<br />100,000 BTU's</td>
<td class="chartwb">Current<br />Price<br />per Unit</td>

<td class="chartwb">Cost of<br />100,000 BTU's<br />of Heat</td>
</TR>
<TR BGCOLOR="#FF9999">
<TD class="chartwb">Natural Gas</TD>
<td class="chartwb">CCF</td>
<TD class="chartwb">100,000</TD>
<TD class="chartwb">1.00</TD>
<TD class="chartwb"><INPUT TYPE="text" NAME="AESSEff" SIZE="5" CLASS="Outbox" value="90" />%</TD>
<td class="chartwb"><input style="background-color:ff9999" type="text" name="AUReq" size="5" class="chartwb" readonly="readonly"  /></td>

<td class="chartwb"><INPUT TYPE="text" NAME="APrice" SIZE="5" CLASS="Outbox" value="1.03" /></td>
<td class="chartwb"><input type="text" name="ACost" size="5" class="chartwb" readonly="readonly" /></td>
</TR>
<TR BGCOLOR="#FF9999">
<TD class="chartwb">Propane</TD>
<td class="chartwb">Gallon</td>
<TD class="chartwb">91,600</TD>
<TD class="chartwb">1.09</TD>
<TD class="chartwb"><INPUT TYPE="text" NAME="BESSEff" SIZE="5" CLASS="Outbox" value="80">%</TD>
<td class="chartwb"><input type="text" name="BUReq" size="5" class="chartwb" readonly="readonly" /></td>
<td class="chartwb"><INPUT TYPE="text" NAME="BPrice" SIZE="5" CLASS="Outbox" value="2.40"></td>
<td class="chartwb"><input type="text" name="BCost" size="5" class="chartwb" readonly="readonly" /></td>

</TR>
<TR BGCOLOR="#FF9999">
<TD class="chartwb">Fuel Oil</TD>
<td class="chartwb">Gallon</td>
<TD class="chartwb">138,000</TD>
<TD class="chartwb">0.72</TD>
<TD class="chartwb"><INPUT TYPE="text" NAME="CESSEff" SIZE="5" CLASS="Outbox" value="83">%</TD>
<td class="chartwb"><input type="text" name="CUReq" size="5" class="chartwb" readonly="readonly" /></td>
<td class="chartwb"><INPUT TYPE="text" NAME="CPrice" SIZE="5" CLASS="Outbox" value="2.2090"></td>
<td class="chartwb"><input type="text" name="CCost" size="5" class="chartwb" readonly="readonly" /></td>
</TR>
<TR BGCOLOR="#FF9999">

<TD class="chartwb">Corn</TD>
<td class="chartwb">lb</td>
<TD class="chartwb">6,800</TD>
<TD class="chartwb">14.71</TD>
<TD class="chartwb"><INPUT TYPE="text" NAME="DESSEff" SIZE="5" CLASS="Outbox" value="60">%</TD>
<td class="chartwb"><input type="text" name="DUReq" size="5" class="chartwb" readonly="readonly" /></td>
<td class="chartwb"><INPUT TYPE="text" NAME="DPrice" SIZE="5" CLASS="Outbox" value=".1225"></td>
<td class="chartwb"><input type="text" name="DCost" size="5" class="chartwb" readonly="readonly" /></td>
</TR>
<TR BGCOLOR="#FF9999">
<TD class="chartwb">Wood Pellets</TD>

<td class="chartwb">lb</td>
<TD class="chartwb">8,200</TD>
<TD class="chartwb">12.20</TD>
<TD class="chartwb"><INPUT TYPE="text" NAME="EESSEff" SIZE="5" CLASS="Outbox" value="60">%</TD>
<td class="chartwb"><input type="text" name="EUReq" size="5" class="chartwb" readonly="readonly" /></td>
<td class="chartwb"><INPUT TYPE="text" NAME="EPrice" SIZE="5" CLASS="Outbox" value=".1150"></td>
<td class="chartwb"><input type="text" name="ECost" size="5" class="chartwb" readonly="readonly" /></td>
</TR>
<tr bgcolor="FF0000">
<td class="chartwb" colspan="8">Electric - 8.205 cents</td>
</tr>
<TR BGCOLOR="#FF9999">

<TD class="chartwb">Resistance</TD>
<td class="chartwb">kWh</td>
<TD class="chartwb">3,413</TD>
<TD class="chartwb">29.30</TD>
<TD class="chartwb"><INPUT TYPE="text" NAME="FESSEff" SIZE="5" CLASS="Outbox" value="100">%</TD>
<td class="chartwb"><input type="text" name="FUReq" size="5" class="chartwb" readonly="readonly" /></td>
<td class="chartwb"><INPUT TYPE="text" NAME="FPrice" SIZE="5" CLASS="Outbox" value=".08205"></td>
<td class="chartwb"><input type="text" name="FCost" size="5" class="chartwb" readonly="readonly" /></td>
</TR>
<TR BGCOLOR="#FF9999">
<TD class="chartwb">Heat Pump (Air-to-Air)</TD>

<td class="chartwb">kWh</td>
<TD class="chartwb">3,413</TD>
<TD class="chartwb">29.30</TD>
<TD class="chartwb"><INPUT TYPE="text" NAME="GESSEff" SIZE="5" CLASS="Outbox" value="260">%</TD>
<td class="chartwb"><input type="text" name="GUReq" size="5" class="chartwb" readonly="readonly" /></td>
<td class="chartwb"><INPUT TYPE="text" NAME="GPrice" SIZE="5" CLASS="Outbox" value=".08205"></td>
<td class="chartwb"><input type="text" name="GCost" size="5" class="chartwb" readonly="readonly" /></td>
</TR>
<TR BGCOLOR="#FF9999">
<TD class="chartwb">Heat Pump Water Source (Closed Loop)</TD>
<td class="chartwb">kWh</td>

<TD class="chartwb">3,413</TD>
<TD class="chartwb">29.30</TD>
<TD class="chartwb"><INPUT TYPE="text" NAME="HESSEff" SIZE="5" CLASS="Outbox" value="400">%</TD>
<td class="chartwb"><input type="text" name="HUReq" size="5" class="chartwb" readonly="readonly" /></td>
<td class="chartwb"><INPUT TYPE="text" NAME="HPrice" SIZE="5" CLASS="Outbox" value=".08205"></td>
<td class="chartwb"><input type="text" name="HCost" size="5" class="chartwb" readonly="readonly" /></td>
</TR>
<tr bgcolor="FF0000">
<td class="chartwb" colspan="8">Electric Interruptible - 4.75 cents</td>
</tr>
<TR BGCOLOR="#FF9999">
<TD class="chartwb">Resistance</TD>

<td class="chartwb">kWh</td>
<TD class="chartwb">3,413</TD>
<TD class="chartwb">29.30</TD>
<TD class="chartwb"><INPUT TYPE="text" NAME="IESSEff" SIZE="5" CLASS="Outbox" value="100">%</TD>
<td class="chartwb"><input type="text" name="IUReq" size="5" class="chartwb" readonly="readonly" /></td>
<td class="chartwb"><INPUT TYPE="text" NAME="IPrice" SIZE="5" CLASS="Outbox" value=".0475"></td>
<td class="chartwb"><input type="text" name="ICost" size="5" class="chartwb" readonly="readonly" /></td>
</TR>
<TR BGCOLOR="#FF9999">
<TD class="chartwb">Heat Pump (Air-to-Air)</TD>
<td class="chartwb">kWh</td>

<TD class="chartwb">3,413</TD>
<TD class="chartwb">29.30</TD>
<TD class="chartwb"><INPUT TYPE="text" NAME="JESSEff" SIZE="5" CLASS="Outbox" value="260">%</TD>
<td class="chartwb"><input type="text" name="JUReq" size="5" class="chartwb" readonly="readonly" /></td>
<td class="chartwb"><INPUT TYPE="text" NAME="JPrice" SIZE="5" CLASS="Outbox" value=".0475"></td>
<td class="chartwb"><input type="text" name="JCost" size="5" class="chartwb" readonly="readonly" /></td>
</TR>
<TR BGCOLOR="#FF9999">
<TD class="chartwb">Heat Pump Water Source (Closed Loop)</TD>
<td class="chartwb">kWh</td>
<TD class="chartwb">3,413</TD>

<TD class="chartwb">29.30</TD>
<TD class="chartwb"><INPUT TYPE="text" NAME="KESSEff" SIZE="5" CLASS="Outbox" value="400">%</TD>
<td class="chartwb"><input type="text" name="KUReq" size="5" class="chartwb" readonly="readonly" /></td>
<td class="chartwb"><INPUT TYPE="text" NAME="KPrice" SIZE="5" CLASS="Outbox" value=".0475"></td>
<td class="chartwb"><input type="text" name="KCost" size="5" class="chartwb" readonly="readonly" /></td>
</TR>

</TABLE>
<p align="center"><font size="-2">Current Price per Unit accurate as of 1/16/2009.</font></p>
<P ALIGN="center">
<INPUT TYPE="reset" VALUE="Clear" CLASS="bttn">&nbsp; &nbsp;
<INPUT TYPE="button" VALUE="Calculate" onClick="Calc(this.form)" CLASS="bttn">&nbsp; &nbsp;

<INPUT TYPE="button" VALUE="Print" onclick="PrintIt(this.form)" CLASS="bttn">
</P>
</FORM>

<P>
</TD>
</TR>
</TABLE>


<BODY>

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
<TABLE width="100%" border="0" cellPadding="0" cellSpacing="0">
  <TBODY>

    <TR height="2"> 
      <TD colspan="2" height="1" bgColor="#CC0000"><img src="/images/2h.gif"></TD>
    </TR>
	
    <TR height=28> 
      <TD height="134"> 
        <DIV align="center"><h5>Cherryland Electric Cooperative reminds you... Three Full Working Days before you dig, Call MISS DIG at 1 (800) 482-7171</h5>
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
			
        </DIV></TD>
    </TR>
  </TBODY>
</TABLE></td></tr></table></div>


<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-1291990-1");
pageTracker._trackPageview();
</script>

</BODY></HTML>

