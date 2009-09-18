<?php 
$breadcrumb = $this->layout()->breadcrumb;
$stylesheets = isset($this->layout()->stylesheets) ? $this->layout()->stylesheets : array();
$jssources = isset($this->layout()->jssources) ? $this->layout()->jssources : array();
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?= $this->breadcrumbs("%name%", " &raquo; ") ?></title>
<meta name="keywords" content="LAN Party, Michigan LAN Party, TCFF" />
<meta name="description" content="Traverse City FragFest, The BIGGEST Northern Michigan LAN Party" />
<style type="text/css">
<!--
@import url(/css/main.css);
<?= $this->cssImport() ?>
<?php foreach($stylesheets as $stylesheet) { /* Page-specific stylesheets */ ?>
@import url(/css/<?= $stylesheet ?>.css);
<?php } ?>
<?= isset($this->layout()->styleTemplate)?$this->render($this->layout()->styleTemplate):"" ?>

<?php /*if(!$this->layout()->topBannerDisabled) { ?>
div#content
{
	padding-top: 30px;
}	
<?php } /*if(topBanner)*/ ?>

-->
</style>
<script src="http://www.google-analytics.com/ga.js" type="text/javascript" language="javascript"></script>
<script src="/js/prototype.js" type="text/javascript" language="javascript"></script>
<script src="/js/scriptaculous/scriptaculous.js" type="text/javascript" language="javascript"></script>
<script src="/js/common.js" type="text/javascript" language="javascript"></script>
<script src="/js/navigation.js" type="text/javascript" language="javascript"></script>
<?php foreach($jssources as $jssource) { /* Page-specific (static) Javascript */ ?>
<script src="/js/<?= $jssource ?>.js" type="text/javascript" language="javascript"></script>
<?php } ?>
<?= $this->scripts() ?>
<script type="text/javascript" language="javascript">
<!--
// Page-specific (dynamic) Javascript
<?= isset($this->layout()->javascriptTemplate)?$this->render($this->layout()->javascriptTemplate):"" ?>
//-->
</script>
</head>

<body>
<div id="overall_container">
	<div id="top">
		<div id="header">
<?= $this->breadcrumbs(
"			<h%count%><a href=\"%url%\" title=\"%name%\"><span>%name%</span></a></h%count%>
","", 6
)?>
		</div><!-- /#header -->
		<div id="nav">
<?= $this->render($this->layoutFile($this, 'nav')) ?>

		</div><!-- /#nav -->
	</div><!-- /#top -->
	<div id="middle">
		<div style="clear:both"></div>

<?php if(!$this->layout()->leftDisabled) { ?>		
		<div id="left">
<?= $this->render($this->layoutFile($this, 'left')) ?>

		</div><!-- /#left -->
<?php } /*if(leftDisabled)*/ ?>
<?php if(!$this->layout()->rightDisabled) { ?>		
		<div id="right">
<?= $this->render($this->layoutFile($this, 'right')) ?>

		</div><!-- /#right -->
<?php } /*if(rightDisabled)*/ ?>

<?php if(!$this->layout()->topBannerDisabled) { ?>		
		<div id="topBanner">
<?= $this->render($this->layoutFile($this, 'topBanner')) ?>

		</div><!-- /#topBanner -->
<?php } /*if(topBanner)*/ ?>

		<div id="content">
<?= $this->layout()->content ?>

		</div><!-- /#content -->
	</div><!-- /#middle -->
	<div style="clear:both"></div>
	<div id="bottom">
		<div id="sitemap">
<?= $this->render($this->layoutFile($this, 'sitemap')) ?>
		</div>
		<div id="footer">
<?= $this->render($this->layoutFile($this, 'footer')) ?>

		</div><!-- /#footer -->
	</div><!-- /#bottom -->
</div><!-- /#overall_container -->
</body>
</html>