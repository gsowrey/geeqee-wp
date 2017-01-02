<?php get_header(); ?>

<?php get_sidebar(); ?>

<div id="content">
<div id="authors">
<div class="story">

<?php if ($posts) : foreach ($posts as $post) : start_wp(); ?>

<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>

<div class="storycontent">
<?php the_content(__('(more...)')); ?> <?php edit_post_link(); ?>
</div> 

	<!--
	<?php trackback_rdf(); ?>
	-->
	

<?php endforeach; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</div>
</div>

<?php get_footer(); ?>