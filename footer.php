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

<footer id="footerWrapper" class="footer5">
	<section id="mainFooter">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					<div class="footerWidget">
						<img src="<?php echo get_template_directory_uri();?>/inc/images/LJS-white-footer-min.png" alt="Footer Logo" class="img-responsive" id="footer-logo">
						<p><a href="<?php echo home_url();?>" title="Ljohnson Solutions">Ljohnson Solutions</a> is a web design and development studio. We build responsive	 HTML5 and CSS3 websites, integrating best web design practices and up-to-date web technologies to create great user experiences. We love what we do and we hope you do too! </p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="footerWidget">
						<!-- twitter -->
						<div id="twitterFrame">
							<h3><a class="twitter-timeline" href="https://twitter.com/ljohnso16" data-widget-id="693589643137196032">Tweets by @ljohnso16</a></h3>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>						</div>
						<!-- twitter -->
					</div>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					<div class="footerWidget">
						<h3>Keep in touch </h3>
						<address>
							<p><span class="icon icon-envelope"></span>&nbsp;<a href="http://ljohnsonsolutions.com/contact/">Contact</a></p>
							<p><span class="icon icon-map-marker"></span>&nbsp;Colorado Springs, Colorado</p>
							<p><span class="icon icon-map-marker"></span>&nbsp;Los Angeles, California</p>							
							<p><span class="icon icon-skype"></span>&nbsp;Theljohnson</p>
						</address>
					</div>
				</div>
			</div>
		</div>
	</section>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<p class="copyright text-center">Copyright &copy; <?php echo date('Y');?> <a href="<?php echo home_url();?>" target="blank">LjohnsonSolutions</a> All rights reserved.</p>
				</div>
			</div>
		</div>
</footer>
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
