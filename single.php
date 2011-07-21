<?php get_header(); ?>

<div id="obsah">	

<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?> 
<div class="post">
	<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
</div>
<div class="entry">
	<?php the_content(); ?>
	<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
				<p class="postmetadata">
	<?php _e('Filed under&#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php  the_author(); ?>
	<?php edit_post_link('Edit', ' &#124; ', ''); ?> 
					</p>
					<p><!--  twitter--><script type="text/javascript">
					tweetmeme_style = 'compact';
					</script>
					<script type="text/javascript" src="http://tweetmeme.com/i/scripts/button.js"></script>
					<a name="fb_share" type="button_count" href="http://www.facebook.com/sharer.php" style="position: relative; top: -8px"">Share</a><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script></p>


				
</div>

<div class="comments-template">
<?php comments_template(); ?>
</div>

<?php endwhile; ?>
<div class="navigation">
	<?php previous_post_link('&laquo; %link') ?> <?php next_post_link(' %link &raquo;') ?>
<?php endif; ?>
</div>

</div><!-- div obsah-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>	