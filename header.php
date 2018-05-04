<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package medusa
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Montserrat|PT+Sans" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'medusa' ); ?></a>

<header id="masthead" class="site-header d-flex align-items-center justify-content-center" role="banner" 
<?php if (is_single() || is_page() ) : ?> style="background-image: url(<?php the_post_thumbnail_url() ?>)" <?php endif; ?> >
	<!-- Menu -->
	<nav id="site-navigation" class="main-navigation navbar navbar-expand-lg fixed-top" role="navigation">
	<a class="navbar-brand" href="#">Demarquage</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
		</button>			
	
  <?php wp_nav_menu( array(
	'theme_location'  => 'primary',
	'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
	'container'       => 'div',
	'container_class' => 'collapse navbar-collapse',
	'container_id'    => 'bs-example-navbar-collapse-1',
	'menu_class'      => 'navbar-nav ml-auto',
	'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
	'walker'          => new WP_Bootstrap_Navwalker(),
) ); ?>
<div class="header-search">
			<?php get_search_form(); ?>
        </div>
		</nav><!-- End Menu -->
<!-- Header -->
		<div class="site-branding">
			<?php
			/* Header Home */
			if ( is_front_page() && is_home() ) : ?>
				<p>Carrousel</p>
			<!-- Header Post, Page -->
			<?php elseif (is_single() || is_page() ) : ?>
				<p class="header_title"><?php single_post_title(); ?></p>
			<?php endif;?>

		</div><!-- .site-branding -->
	</header><!-- #masthead -->
	<hr>

	<div id="content" class="site-content">