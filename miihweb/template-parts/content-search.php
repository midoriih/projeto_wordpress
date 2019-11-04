 <article <?php post_class() ?>>
 	
 	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </h2></a>
 	<div class="meta-info">
	 	<p> <?php _e( 'by', 'miihweb' ); ?> <?php the_author_posts_link(); ?></p>
	 	<?php if( has_category() ): ?>
	 		<p><?php _e( 'Categories:', 'miihweb' ); ?> <?php the_category( ', ', ' ,' ); ?></p>
	 	<?php endif; ?>	
	 	<p><?php the_tags( __('Tags: ', 'miihweb' ), ', '); ?></p>>
 	</div>
 	<?php the_excerpt(); ?>
 </article>