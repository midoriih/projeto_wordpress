 <article <?php post_class( array( 'class' => 'secondary' ) ); ?>>
 	<div class="thumbnail">
 		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large', array('class' => 'img-fluid' ) ); ?></a>
 	</div>
 	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </h2></a>
 	<div class="meta-info">
	 	<p>
		 	<?php _e( 'by', 'miihweb' ); ?> <span><?php the_author_posts_link(); ?></span>
		 	<?php _e( 'Categories:', 'miihweb' ); ?> <span><?php the_category( ', ', ' ,' ); ?></span>
		 	<?php the_tags( __('Tags: ', 'miihweb' ), ', '); ?>
	 			 		
	 	</p>
	 	
 	</div>
 	<?php the_excerpt(); ?>
 </article>