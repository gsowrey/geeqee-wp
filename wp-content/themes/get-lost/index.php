<?php get_header(); ?>

<?php get_sidebar(); ?>

<div id="content">
<div id="authors">

<div id="amy">
<?php if ( have_posts() ) : while ( have_posts()) : the_post(); ?>
<?php if ( the_author('firstname',false) == "Amy") { ?>
<div class="date"><?php the_time('j F Y'); ?></div>

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
<?php } ?>

<?php endwhile; else: ?>
<?php endif; ?>
</div>

<?php rewind_posts(); ?>

<div id="geoff">
<?php if ( have_posts() ) : while ( have_posts()) : the_post(); ?>
<?php if ( the_author('firstname',false) == "Geoff") { ?>
<div class="date"><?php the_time('j F Y'); ?></div>

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
<?php } ?>

<?php endwhile; else: ?>
<?php endif; ?>
</div>
</div>

<?php get_footer(); ?>