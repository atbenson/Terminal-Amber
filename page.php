<?php get_header(); ?>

<div id="obsah">	

<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?> 
<div class="post">
	<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
</div>
<div class="entry">
	<?php the_content(); ?>
	<?php wp_link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
	<?php edit_post_link('Edit', '<p>', '</p>'); ?>
</div>
<?php endwhile; ?>
<?php endif; ?>
	
</div><!-- div obsah-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>	
