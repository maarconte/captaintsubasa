<?php
/**
 * The template for displaying archive pages.
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
		if ( have_posts() ) : ?>

			<header class="page-header d-flex">
				<?php				
					echo '<h1 class="page-title">';single_cat_title();echo '</h1>';
				?>
				<div class="line"></div>
			</header><!-- .page-header -->
<div class="row">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>

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

		<?php	endwhile; ?>
		</div>
		<?php	the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar(); ?>
</div>
<?php get_footer(); ?>
