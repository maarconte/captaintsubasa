<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package medusa
 */

get_header(); ?>
	<div class="row">
	<div id="primary" class="content-area col-sm-9">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			   

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
<div class="row">
<?php $related = get_posts( 
    array( 
        'category__in' => wp_get_post_categories( $post->ID ), 
        'numberposts'  => 3, 
        'post__not_in' => array( $post->ID ) 
    ) 
);

if( $related ) { 
    foreach( $related as $post ) {
        setup_postdata($post); ?>
		<div class="col-sm-4">
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
  <?php  }
    wp_reset_postdata();
}?>
</div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar(); ?>
</div>
<?php get_footer(); ?>