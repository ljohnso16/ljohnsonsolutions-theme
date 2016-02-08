<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ljohnsonsolutions
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header">
	<nav>
		<div class="navbar navbar-static-top navbar-default navbar-inverse">
		  <div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ) ?>"><img src="<?php echo get_template_directory_uri();?>/inc/images/LJS-white-thin-head-min.png"></a>
				</div>
				<div class="navbar-collapse collapse navbar-responsive-collapse">
					<?php
					$args = array(
						'theme_location' => 'primary',
						'depth'      => 2,
						'container'  => false,
						'menu_class'     => 'nav navbar-nav navbar-right',
						'walker'     => new Bootstrap_Walker_Nav_Menu()
						);

					if (has_nav_menu('primary')) {
						wp_nav_menu($args);
					}?>

				</div>
		  </div><!-- /container -->
		</div>
	</nav>
	<?php if(is_front_page()):?>
	<div id="myCarousel" class="carousel slide">
	  <!-- Indicators -->
	  <div class="carousel-inner">
		<div class="item active">
			<img src="<?php echo get_template_directory_uri();?>/inc/images/header-start.png" style="width:100%" class="header-img">
		</div>
	  </div>
	  <!-- Controls -->
	</div>
	<?php endif;?>
	</header><!-- #masthead -->

	<?php
		echo '<div id="content" class="site-content">';
	?>
