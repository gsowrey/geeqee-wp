<div id="sidebar">
<div id="menu">

<div id="main">
<h2>Main</h2>
<ul>
<li><a href="<?php bloginfo('url'); ?>" title="Home">Home</a></li>
<?php wp_list_pages('sort_column=menu_order&title_li='); ?>
</ul>
</div>

<h2 id="categories"><?php _e('Categories'); ?></h2>
<ul>
<?php wp_list_cats('sort_column=name&optioncount=1'); ?>
</ul>

<h2 id="archives"><?php _e('Archives'); ?></h2>
<ul>
<?php wp_get_archives('type=monthly&show_post_count=1'); ?>
</ul>

<div id="search">
<h2><label for="s"><?php _e('Search'); ?></label></h2>	
<form id="searchform" method="get" action="<?php echo $PHP_SELF; ?>">
<input type="text" name="s" id="s" />
<input type="submit" name="submit" id="submit" value="" />
</form>
</div>

<h2 id="links">Links</h2>
<ul>
<?php wp_get_links(1); ?>
</ul>

<h2 id="meta"><?php _e('Meta'); ?></h2>
<ul>
<?php wp_register(); ?>
<li><?php wp_loginout(); ?></li>
<li><a href="feed:<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><?php _e('<abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
<li><a href="feed:<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
<?php wp_meta(); ?>
</ul>

</div>
</div>
