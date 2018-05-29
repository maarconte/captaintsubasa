<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package medusa
 */

get_header(); ?>

<div class="row">
	<div id="primary" class="content-area col-sm-9">
		<main id="main" class="site-main" role="main">
		<?php
			$cat_args=array(
			'orderby' => 'name',
			'order' => 'ASC',
			'exclude'    => array( 1 )
			);
			$categories=get_categories($cat_args);
				foreach($categories as $category) { 
					if ($posts) {
						echo '<h3><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </h3> '; ?>
						<div class="row">
						<div class="col-sm-6">
						<!-- Left Post-->
						<?php 
						$args1=array(
						'showposts' => 1,
						'category__in' => array($category->term_id),
						'ignore_sticky_posts'=>1,	  
						);
						$posts1=get_posts($args1);
							foreach($posts1 as $post) {
								setup_postdata($post); ?>
								
								<div class="card card-featured">
								<a href="<?php the_permalink(); ?>" class="card-img">
									<div class="content">
										<?php if(has_post_thumbnail()) {
											the_post_thumbnail();
										} else { ?>
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/default-thumbnail.jpg" alt="default-image">
										<?php } ?>
									</div>
								</a>
								<div class="card-body">
									<h6 class="card-title"><a href="<?php the_permalink(); ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h6>
								</div>
							</div>
								
						<?php
						} // foreach($posts ?> 
								
						</div>
						<div class="col-sm-6">
						<!-- Right Posts-->
							<div class="row">
							<?php 
								$args=array(
								'showposts' => 4,
								'category__in' => array($category->term_id),
								'ignore_sticky_posts'=>1,
								'offset'=> 1	  
								);
								$posts=get_posts($args);
									foreach($posts as $post) {
										setup_postdata($post); ?>
										<div class="col-sm-6">
											<div class="card">
												<a href="<?php the_permalink(); ?>" class="card-img">
													<div class="content">
														<?php if(has_post_thumbnail()) {
															the_post_thumbnail();
														} else { ?>
															<img src="<?php echo get_template_directory_uri(); ?>/assets/img/default-thumbnail.jpg" alt="default-image">
														<?php } ?>
													</div>
												</a>
												<div class="card-body">
													<h6 class="card-title"><a href="<?php the_permalink(); ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h6>
												</div>
											</div>
										</div>
								<?php
								} // foreach($posts ?>
							</div>
						</div>
						
					<?php  } // if ($posts
					?> </div> <?php } // foreach($categories
?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();?>
</div>
<?php get_footer();?>
