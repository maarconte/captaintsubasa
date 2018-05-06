<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package captaintsubasa
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
				<p><?= get_bloginfo( 'name' ); ?></p>
				<p><?= get_bloginfo( 'description' ); ?></p>
				<?php
				if (has_nav_menu('social')): ?>
					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e('Footer Social Links Menu', 'captaintsubasa');?>">
						<?php
					wp_nav_menu(array(
						'theme_location' => 'social',
						'menu_class' => 'social-links-menu',
						'depth' => 1,
						'link_before' => '<span class="screen-reader-text">',
						'link_after' => '</span>' . captaintsubasa_get_svg(array('icon' => 'chain')),
					));
					?>
					</nav><!-- .social-navigation -->
				<?php endif;?>
				</div>
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</div>
			
			<div class="site-info">
				<span><a href="http://thatmuch.fr/" rel="designer"> ThatMuch</a></span>
			</div><!-- .site-info -->

		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer();?>

</body>
</html>
