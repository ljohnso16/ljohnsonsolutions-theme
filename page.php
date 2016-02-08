<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ljohnsonsolutions
 */

get_header(); 
if ( is_front_page()):?>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-lg-4">graph1</div>
		<div class="col-md-4 col-lg-4">graph2</div>
		<div class="col-md-4 col-lg-4">graph3</div>
	</div>
</div>
<?php endif; ?>
<div class="container">
	<div class="row">
	<div id="primary" class="col-md-9 col-lg-9">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php 
				if ( is_front_page()){
					get_template_part( 'template-parts/content', 'front' ); 
				}
				else{
					get_template_part( 'template-parts/content', 'page' ); 
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				}
				?>
			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php 
if (! is_home() && ! is_front_page() ){
	get_sidebar();
}
else{	
		echo '<div id="secondary" class="widget-area col-md-3 col-lg-3" role="complementary">';
			dynamic_sidebar( 'sidebar-2' );
		echo '</div><!-- #secondary -->';
	echo '</div> <!-- .row -->';
echo '</div>';
	
}
	
 get_footer(); ?>
