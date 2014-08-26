<?php
/*
Template name: customer_coruse
*/
?>

<?php get_header(); ?>




<div class="fullwirdthdiv hidden-xs" style="padding-bottom:20px;">
		<div class="container-fluid">
				<div class="rows">
				
				      <div class="col-lg-6 col-lg-offset-3 ">
				      	
				      	<img src="holder.js/1000x500/auto">

				      </div>
				    
				</div>
		</div>
</div>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="custom-course">
	
				<div class="container">
					

					<div class="rows">
					
						<div class="col-xs-6 col-sm-3 col-md-3">
										<a href="<?php echo get_site_url(); ?> /coruse_A"><img src="holder.js/300x150/auto"></a>
						</div>

						<div class="col-xs-6 col-sm-3 col-md-3">
										<a href="<?php echo get_site_url(); ?> /coruse_B"><img src="holder.js/300x150/auto"></a>
						</div>

						<div class="col-xs-6 col-sm-3 col-md-3">
										<a href="<?php echo get_site_url(); ?> /coruse_C"><img src="holder.js/300x150/auto"></a>
						</div>

						<div class="col-xs-6 col-sm-3 col-md-3">
										<a href="<?php echo get_site_url(); ?> /coruse_D"><img src="holder.js/300x150/auto"></a>
						</div>
					
					</div>

					<div class="cousecontent">
						<div class="rows">
			
							<?php while ( have_posts() ) : the_post(); ?>

								<?php get_template_part( 'content' ); ?>

								<?php
									// If comments are open or we have at least one comment, load up the comment template
									if ( comments_open() || '0' != get_comments_number() ) :
										comments_template();
									endif;
								?>

							<?php endwhile; // end of the loop. ?>

						</div>
					</div>




				</div>


			</div>



			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
