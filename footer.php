<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ljohnsonsolutions
 */

?>

	</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'ljohnsonsolutions' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'ljohnsonsolutions' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'ljohnsonsolutions' ), 'ljohnsonsolutions', '<a href="http://underscores.me/" rel="designer">Lloyd Johnson</a>' ); ?>
			</div><!-- .site-info -->
		</div><!-- .row -->
	</div><!-- .container -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>