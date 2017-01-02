<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
<!--
Red Train: Template for Wordpress 1.5
(c) by Vladimir Simovic aka Perun
www.vlad-design.de and www.perun.net

The CSS, XHTML and design is released under GPL:
http://www.opensource.org/licenses/gpl-license.php
-->
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
<meta name="page-topic" content="Riding the Trans Siberian Railway" />
<meta name="audience" content="alle" />
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
<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a> : <span><?php bloginfo('description');?></span></h1>
</div>

<div id="navi">
<div id="navi-innen">

<h2>Main</h2>
<ul>
<li><a href="<?php bloginfo('url'); ?>">Home</a></li>
<?php wp_list_pages('sort_column=menu_order&title_li='); ?>
</ul>

<h2><?php _e('Categories:'); ?></h2>
<ul>
<?php wp_list_cats('sort_column=name&optioncount=1'); ?>
</ul>

<h2><?php _e('Archives:'); ?></h2>
<ul>
<?php wp_get_archives('type=monthly&show_post_count=1'); ?>
</ul>

<h2><label for="s"><?php _e('Search:'); ?></label></h2>	
<form id="searchform" method="get" action="<?php echo $PHP_SELF; ?>">
<div>
<input type="text" name="s" id="s" size="17" class="navi-search" /><br />
<input type="submit" name="submit" value="<?php _e('Search'); ?>" class="search-button" />
</div>
</form>

<h2>Links</h2>
<ul>
<?php wp_get_links(1); ?>
</ul>

<h2><?php _e('Meta:'); ?></h2>
<ul>
<?php wp_register(); ?>
<li><?php wp_loginout(); ?></li>
<li><a href="feed:<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><?php _e('<abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
<li><a href="feed:<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
<li><a href="http://validator.w3.org/check/referer" title="<?php _e('This page validates as XHTML 1.0 Transitional'); ?>"><?php _e('Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr>'); ?></a></li>
<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
<li><a href="http://wordpress.org/" title="<?php _e('Powered by WordPress, state-of-the-art semantic personal publishing platform.'); ?>"><abbr title="WordPress">WP</abbr></a></li>
<?php wp_meta(); ?>
</ul>

<?php if (function_exists('wp_theme_switcher')) { ?>
<h2>Styleswitcher</h2> 
<?php wp_theme_switcher(); ?>
<?php } ?>
</div>
</div>

<hr />

<div id="content">

<?php if ($posts) : foreach ($posts as $post) : start_wp(); ?>

<div class="date"><?php the_date(); ?></div>

<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>

<div class="meta"><?php _e("Filed under:"); ?> <?php the_category(',') ?> &#8212; <?php the_author() ?> @ <?php the_time() ?> <?php edit_post_link(); ?></div>

<div class="storycontent">
<?php the_content(__('(more...)')); ?>
</div> 

<div class="feedback">
<?php wp_link_pages(); ?>
<?php comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)')); ?>
</div>

	<!--
	<?php trackback_rdf(); ?>
	-->
	
<?php comments_template(); ?>

<?php endforeach; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<div class="center"><?php posts_nav_link('&nbsp;&nbsp;', __('&laquo; Previous'), __('Next &raquo;')); ?></div>

<div id="footer">
<script type="text/javascript">
EXs=screen;
EXw=EXs.width;
navigator.appName!="Netscape"?EXb=EXs.colorDepth:EXb=EXs.pixelDepth;
EXlogin='geoffamy';
EXvsrv='s9';
navigator.javaEnabled()==1?EXjv="y":EXjv="n";
EXd=document;
EXw?"":EXw="na";
EXb?"":EXb="na";
EXd.write("<img src=\"http://e0.extreme-dm.com",
"/"+EXvsrv+".g?login="+EXlogin+"&amp;",
"jv="+EXjv+"&amp;j=y&amp;srw="+EXw+"&amp;srb="+EXb+"&amp;",
"l="+escape(EXd.referrer)+"\" height=1 width=1>");
</script>
<noscript><img height="1" width="1" alt=""
src="http://e0.extreme-dm.com/s9.g?login=geoffamy&amp;j=n&amp;jv=n"/>
</noscript>
</div>
</div>

</div>

</body>
</html>