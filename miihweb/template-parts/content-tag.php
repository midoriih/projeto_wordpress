 <article <?php post_class() ?>>

 	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </h2></a>
 	<?php the_post_thumbnail( array( 275,275 )); ?>
 	<div class="meta-info">
	 	<p><?php _e( 'Published in', 'miihweb'); ?><?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
	 	<p><?php the_tags( __('Tags: ', 'miihweb' ), ', '); ?></p>
 	</div>
 	<?php the_excerpt(); ?>
 </article>