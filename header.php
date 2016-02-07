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
	<div id="myCarousel" class="carousel slide">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
		<div class="item active">
		  <img src="/assets/example/bg_suburb.jpg" style="width:100%" class="img-responsive">
		  <div class="container">
			<div class="carousel-caption">
			  <h1>Bootstrap 3 Carousel Layout</h1>
			  <p></p>
			  <p><a class="btn btn-lg btn-primary" href="http://getbootstrap.com">Learn More</a>
			</p>
			</div>
		  </div>
		</div>
		<div class="item">
		  <img src="http://lorempixel.com/2000/600/abstract/1" class="img-responsive">
		  <div class="container">
			<div class="carousel-caption">
			  <h1>Changes to the Grid</h1>
			  <p>Bootstrap 3 still features a 12-column grid, but many of the CSS class names have completely changed.</p>
			  <p><a class="btn btn-large btn-primary" href="#">Learn more</a></p>
			</div>
		  </div>
		</div>
		<div class="item">
		  <img src="http://placehold.it/1500X500" class="img-responsive">
		  <div class="container">
			<div class="carousel-caption">
			  <h1>Percentage-based sizing</h1>
			  <p>With "mobile-first" there is now only one percentage-based grid.</p>
			  <p><a class="btn btn-large btn-primary" href="#">Browse gallery</a></p>
			</div>
		  </div>
		</div>
	  </div>
	  <!-- Controls -->
	  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		<span class="icon-prev"></span>
	  </a>
	  <a class="right carousel-control" href="#myCarousel" data-slide="next">
		<span class="icon-next"></span>
	  </a>
	</div>
	</header><!-- #masthead -->

	<?php
		echo '<div id="content" class="site-content">';
	?>
