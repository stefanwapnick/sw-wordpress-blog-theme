<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SW Wordpress Blog Theme
 */

?>


<!-- FOOTER PANEL SECTION
================================================== -->
<section id="footer-panel" data-type="parallax" data-speed-factor="4">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<div class="primary-panel" ">
					<h2>Footer Text Section</h2>
				</div>
				<p>
					<?php get_template_part('template-parts/content', 'socials'); ?>
				</p>
			</div>
		</div>
	</div>
</section>


<!-- FOOTER BAR SECTION
================================================== -->
<footer id="footer-bar">
	<div class="container">
		<div class="col-sm-3">
			<p><a href="/"><img src="<?php bloginfo('template_directory'); ?>/images/logo-small-placeholder.png"></a></p>
		</div><!-- end col -->
		<div class="col-sm-6">

			<?php
			wp_nav_menu( array(
				'theme_location' => 'footer',
				'container' => 'nav',
				'menu_class' => 'list-unstyled list-inline'
			));
			?>
		</div>
		<div class="col-sm-3">
			<p class="pull-right">&copy; <?php echo date('Y'); ?> - <?php bloginfo('name'); ?> </p>
		</div>
	</div>
</footer>

<!-- JAVASCRIPT FILES
====================================================== -->
<script src="<?php bloginfo('template_directory')?>/js/jquery-1.11.3.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/js/simple-parallax.js"></script>

<?php wp_footer(); ?>

</body>
</html>
