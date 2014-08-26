<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package edenBuild0.1
 */



get_header(); ?>

<!--star Sider-->
	<div class="sliderheader">
		<div class="container-fluid">
			<div class="row">
				<div class="flexslider hidden-xs">
				  <ul class="slides">
				    <li>
				      <img src="holder.js/1000x350/auto">
				    </li>
				    <li>
				      <img src="holder.js/1000x350/auto">
				    </li>
				    <li>
				      <img src="holder.js/1000x350/auto">
				    </li>
				  </ul>
				</div>
			</div>
		</div>
	</div>
<!--endSider-->
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<!--strat-->
			<div class="container">
				<div class="secoundNav">
					<div class="row">
						<div class="col-xs-12 col-sm-3 col-md-3">
							<img src="holder.js/300x150/lava/auto">
						</div>
						<div class="col-xs-12 col-sm-3 col-md-3">
							<img src="holder.js/300x150/lava/auto">
						</div>
						<div class="col-xs-12 col-sm-3 col-md-3">
							<img src="holder.js/300x150/lava/auto">
						</div>
						<div class="col-xs-12 col-sm-3 col-md-3">
							<img src="holder.js/300x150/lava/auto">
						</div>
					</div>
				</div>
				<div class="postThumnail">
					<div class="news post">
						<div class="titlecat">
								<div class="row">
								<div class="col-xs-12 col-md12">
									<h1>News</h1>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-3 col-md-3">
								<img src="holder.js/300x150/sky/auto">
							</div>
							<div class="col-xs-12 col-sm-3 col-md-3">
								<img src="holder.js/300x150/sky/auto">
							</div>
							<div class="col-xs-12 col-sm-3 col-md-3">
								<img src="holder.js/300x150/sky/auto">
							</div>
							<div class="col-xs-12 col-sm-3 col-md-3">
								<img src="holder.js/300x150/sky/auto">
							</div>
						</div>
					</div>
					<div class="activity post">
						<div class="titlecat">
							<div class="row">
							<div class="col-xs-12 col-md12">
								<h1>Activity</h1>
							</div>
						</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-3 col-md-3">
								<img src="holder.js/300x150/vine/auto">
							</div>
							<div class="col-xs-12 col-sm-3 col-md-3">
								<img src="holder.js/300x150/vine/auto">
							</div>
							<div class="col-xs-12 col-sm-3 col-md-3">
								<img src="holder.js/300x150/vine/auto">
							</div>
							<div class="col-xs-12 col-sm-3 col-md-3">
								<img src="holder.js/300x150/vine/auto">
							</div>
						</div>
					</div>
					<div class="vdo post">
						<div class="titlecat">
								<div class="row">
								<div class="col-xs-12 col-md12">
									<h1>CSR video even</h1>
								</div>
							</div>
						</div>
						<div class="row">
							<?php 	$args = array(

									'posts_per_page'   => 4,
									'offset'           => 0,
									'category'         => '',
									'orderby'          => 'post_date',
									'order'            => 'DESC',
									'include'          => '',
									'exclude'          => '',
									'meta_key'         => '',
									'meta_value'       => '',
									'post_type'        => 'post',
									'post_mime_type'   => '',
									'post_parent'      => '',
									'suppress_filters' => true ); 

									$category_id = get_cat_ID('vdo');
									$posts  = get_posts($args);

							

										function new_excerpt_more( $more ) {
											return ' <a class="btn btn-warning" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'your-text-domain') . '</a>';

										}

										add_filter( 'excerpt_more', 'new_excerpt_more' );


									foreach ($posts as $post)
							        {
							              $postdate =$post->post_date;
							              $postdateformat = date_i18n( get_option( 'date_format' ), strtotime( $postdate ) );
							              $content  =$post->post_content;
							              $posttitle =$post->post_title;

							              $content = apply_filters( 'excerpt_more', $content );

							              $posttitles = wp_trim_words($posttitle,3);
							              



							        echo '<div class="col-xs-12 col-sm-3 col-md-3">';
							        echo ' <div class="posthome_content">';
							        echo '  <a href="' . get_permalink( $post->ID ) . '" title="' . esc_attr( $post->post_title ) . '">';
							        echo the_post_thumbnail() ;   /* get_the_post_thumbnail( $post->ID,'full');*/
							        echo '  </a>';
							        echo '  <div class="innercontent">';
							        echo '   <h3>'.$posttitles.'</h3>';
							        echo '   <div><span class="date"> '.$postdateformat.'<span></div>';
							        echo '   <div><p>' . $content.'</p></div>';
							        echo '  </div>';
							        echo ' </div>';
							        echo '</div>';
							      }


							?>
							</div>
						</div>
					</div>
				</div>
			</div>
		<!--End-->
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
