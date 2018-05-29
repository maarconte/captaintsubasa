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
<html <?php language_attributes();?>>
<head>
<meta charset="<?php bloginfo('charset');?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Montserrat|PT+Sans" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">

<?php wp_head();?>
</head>

<body <?php body_class();?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'medusa');?></a>
		<!-- Menu -->
		<nav id="site-navigation" class="main-navigation navbar navbar-expand-lg sticky-top" role="navigation">
			<a class="navbar-brand" href="<?=home_url()?>"><?=get_bloginfo('name');?></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
			</button>
			<!-- Primary Menu -->
			<div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
				<?php wp_nav_menu(array(
    'theme_location' => 'primary',
    'depth' => 2, // 1 = no dropdowns, 2 = with dropdowns.
    'container' => 'ul',
    'menu_class' => 'navbar-nav ml-auto',
    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
    'walker' => new WP_Bootstrap_Navwalker(),
));?>
				<!-- Social Menu -->
				<?php if (has_nav_menu('social')): ?>
					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e('Footer Social Links Menu', 'captaintsubasa');?>">
						<?php wp_nav_menu(array(
    'theme_location' => 'social',
    'menu_class' => 'social-links-menu',
    'depth' => 1,
    'link_before' => '<span class="screen-reader-text">',
    'link_after' => '</span>' . captaintsubasa_get_svg(array('icon' => 'chain')),
));?>
					</nav><!-- .social-navigation -->
				<?php endif;?>
				<!-- Search -->
				<div class="header-search">
					<?php get_search_form();?>
				</div>
			</div>
			</nav><!-- End Menu -->

			<!-- Header Home -->
			<?php if (is_home()): ?>
				<header id="masthead" class=" home site-header" role="banner">
					<div class="container ">
						<!-- Carrousel -->
						<div class="row">
							<div class="col-8 featured-post">
							<?php $args=array(
							'showposts' => 1
							); 
							$posts=get_posts($args);
							foreach($posts as $post) :?>
								<a href="<?php the_permalink(); ?>" class="post-img">
									<div class="content">
										<?php if(has_post_thumbnail()) {
											the_post_thumbnail();
										} else { ?>
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/default-thumbnail.jpg" alt="default-image">
										<?php } ?>
									</div>
									<div class="post-title">
										<h6><?php the_title(); ?></h6>
									</div>
								</a>
							<?php endforeach ?>
							</div>
							<div class="col-4">
							<?php $args=array(
							'showposts' => 3 ,
							'offset'=> 1 
							); 
							$posts=get_posts($args);
							foreach($posts as $post) :?>
								<a href="<?php the_permalink(); ?>" class="post-img">
									<div class="content">
										<?php if(has_post_thumbnail()) {
											the_post_thumbnail();
										} else { ?>
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/default-thumbnail.jpg" alt="default-image">
										<?php } ?>
									</div>
									<div class="post-title">
										<h6><?php the_title(); ?></h6>
									</div>
								</a>
							<?php endforeach ?>
							</div>
						</div>
					</div>
				</header>

			<!-- HEADER Post, Page -->
			<?php elseif (is_single() || is_page()): ?>
				<header id="masthead" class="site-header d-flex align-items-center justify-content-center" role="banner"
				style="background-image: url(<?php the_post_thumbnail_url()?>)">
					<?php if (is_single() || is_page()): ?>
					<div class="page_infos">
						<?php $categories = get_the_category();
						if (!empty($categories)): ?>
								<p><a  class="page_category" href="<?=get_category_link($categories[0]->term_id);?>"><?=$categories[0]->name?></a></p>
						<?php endif?>
						<h1 class="page_title"><?php single_post_title();?></h1>
						<?php if (is_single()): ?>
							<p class="page_date"><?=get_the_date();?></p>
						<?php endif;?>
					</div>
					<?php endif;?>
				</header>
				<?php else :?>
					<div style="height: 100px"></div>
			<?php endif;?>
	<div id="content" class="site-content container">