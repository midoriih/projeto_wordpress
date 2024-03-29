<?php get_header(); ?>

<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

	<div class="content-area">
		<main>
					   
			<section class="middle-area">
				<div class="container">
					<div class="row">
						
						<div class="tag col-md-8">
							<?php 

							the_archive_title( '<h1 class="tag-title">', '</h1>');
							the_archive_description();

							//Se houver algum post
							if( have_posts() ):
								//Enquanto houver posts, mostre-os 
								while( have_posts() ): the_post();
							 ?>

							 <?php get_template_part( 'template-parts/content', 'tag' ); ?>

							 <?php 
							 	endwhile;

							 	?>

							 	<div class="row">
							 		<div class="pages text-left col-6">
							 			<?php previous_posts_link( "<< Newer posts" ); ?>
							 				
							 			</div>
							 		<div class="pages text-right col-6">
							 			<?php next_posts_link( "Older posts >>" ) ?>
							 		</div>
							 	</div>

							 	<?php


							 else:
							  ?>
							  <p>There's nothing yet to be displayed...</p>

							<?php endif; ?>
						</div>
						<?php get_sidebar( 'blog' ) ?>
					</div>
				</div>
			</section>
			
		</main>	
	</div>
<?php get_footer(); ?>	