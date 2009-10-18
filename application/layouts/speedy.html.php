<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!--title>&lt;? gt_webdev(); ?&gt; /* grand traverse area web development group */</title-->
	<title><?= $this->layout()->site ?></title>
	<?/*= $this->headStyle() */?>
	<link href="css/main.css" type="text/css" rel="stylesheet" />
	<script src="/js/prototype.js" type="text/javascript" language="javascript"></script>
	<script src="/js/common.js" type="text/javascript" language="javascript"></script>
	<?/*= $this->headScript() */?>
</head>

<body>
	<div id="overall">
		<div id="banner"><h1>&lt;? gt_webdev(); ?&gt;<br /> /* grand traverse area web development group */</h1></div>
		<div id="navbar"><div id="navend"></div><div id="navtext">&raquo; <a href="/">#home</a> &laquo;&raquo; <a href="/news">#news</a> &laquo;&raquo; <a href="#">#mailinglist</a> &laquo;&raquo; <a href="#">#meetings</a> &laquo;&raquo; <a href="irc://irc.slashnet.org:6667/#webdev">#contactus</a> &laquo;</div></div>

		<div id="content">
			<div id="left">
				<fieldset>
					<legend>Table of Contents</legend>
					<div id="toc">
						<ul>
							<li><a href="#welcome">Welcome to GTWebDev</a></li>
						</ul>
					</div>
				</fieldset>			
			
				<fieldset>
					<legend>Latest News</legend>
					<div id="newsbox">
				<ul>
					<li>2007 Mar 08
						<ul>
							<li><a href="/news#d20070307">Site Moving Servers</a></li>
						</ul>
					</li>
					<li>2007 Mar 07
						<ul>
							<li><a href="/news#d20070307">February GTLUG Outline Up</a></li>
			
						</ul>
					</li>
					<li>2007 Feb 23
						<ul>
							<li><a href="/news#d20070223">Site Up, but Still Under Construction</a></li>
						</ul>
					</li>
				</ul>
					
					</div>
				</fieldset>			
				<fieldset>
					<legend>Search Manuals</legend>
					<div id="search">
<?= $this->action('widget', 'index', 'search') ?>					
					</div>
				</fieldset>
				
				<fieldset>
					<legend>Advertisments</legend>
					<div id="ads">
						<script type="text/javascript">/*<!--
							google_ad_client = "pub-3264840329288366";
							google_ad_width = 180;
							google_ad_height = 150;
							google_ad_format = "180x150_as";
							google_ad_type = "text_image";
							google_ad_channel = "5122384194";
							google_color_border = "FFFFFF";
							google_color_bg = "FFFFFF";
							google_color_link = "0000FF";
							google_color_text = "000000";
							google_color_url = "007700";
							//2007-02-26: www.gtwebdev.org
							//-->*/
						</script>
						<!--script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script-->
						<script type="text/javascript">/*<!--
							google_ad_client = "pub-3264840329288366";
							google_ad_width = 180;
							google_ad_height = 150;
							google_ad_format = "180x150_as";
							google_ad_type = "text_image";
							google_ad_channel = "5122384194";
							google_color_border = "FFFFFF";
							google_color_bg = "FFFFFF";
							google_color_link = "0000FF";
							google_color_text = "000000";
							google_color_url = "007700";
							//2007-02-26: www.gtwebdev.org
							//-->*/
						</script>
						<!--script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script-->
					
					</div>
				</fieldset>						
		
		<?php 
/*
					
					// get left content
					//$leftContent=Gtwebdev_Util::getLeftContent();
					foreach (Gtwebdev_Util::getLeftContent() as $block) {
						echo "				<fieldset>\n";
						echo "					<legend>".$block['title']."</legend>\n";
						echo "					<div id='".$block['divid']."'>\n";
						echo $block['content'];
						echo "					</div>\n";
						echo "				</fieldset>\n";
					}
*/
				?>
			</div>
			<div id="right">
				<h2><?= $this->layout()->contentHeader ?></h2>
				<?= $this->layout()->content ?>
			</div>
			<div style="clear:both"></div>
		</div>
		<div id="footer">
			<div style="float:left"><a href="http://validator.w3.org/check?uri=referer" title="Valid XHTML 1.0 Transitional"><img src="http://www.w3.org/Icons/valid-xhtml10-blue" alt="Valid XHTML 1.0 Transitional" border="0" height="31" width="88" /></a></div>
			<!--p>Hosting Provided By <a href="http://www.villagepress.com/" title="Village Press, Inc.">Village Press, Inc.</a></p-->
		</div>
	</div>
</body>
</html>
