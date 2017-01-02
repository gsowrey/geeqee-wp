<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head profile="http://gmpg.org/xfn/1">
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<link rel="stylesheet" type="text/css" media="print" href="<?php echo get_settings('siteurl'); ?>/print.css" />

<style type="text/css" media="screen">
@import url( <?php bloginfo('stylesheet_url'); ?> );
</style>

<meta name="author" content="Amy Swenson and Geoff Sowrey" />
<meta name="publisher" content="Amy Swenson and Geoff Sowrey" />
<meta name="copyright" content="2005 Amy Swenson and Geoff Sowrey" />
<meta name="robots" content="index,follow" />
<meta name="revisit-after" content="3 days" />
	
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_get_archives('type=monthly&format=link'); ?>
<?php //comments_popup_script(); // off by default ?>
<?php wp_head(); ?>
</head>
<body>

<div id="container">
	<div id="header">
		<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
	</div>
<hr />
