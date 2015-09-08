<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package SW Wordpress Blog Theme
 */

get_header(); ?>

	<section class="feature-image feature-image-default-alt" data-type="parallax" data-speed-factor="4">
		<h1 class="page-title">That page can't be loaded!</h1>
	</section>

	<div class="container">
		<div id="primary" class="row">
			<main id="content" class="col-sm-8">

				<div class="error-404 not-found">

					<div class="page-content">

						<h4><a href="<?php echo esc_url(home_url('/')); ?>"> Head back to the home page? </a></h4>

						<br /><br /><br />

						<div class="widget widget-category">
							<h4 class="widget-title">Most Used Categories </h4>
							<ul>
								<?php
									wp_list_categories(array(
										'orderby' => 'count',
										'order' => 'DESC',
										'show_count' => 1,
										'title_li' => '',
										'number' => 10
									));
								?>
							</ul>


						</div>

					</div>
				</div>


			</main>
			<aside class="col-sm-4">
				<?php get_sidebar(); ?>
			</aside>
		</div>
	</div>

<?php get_footer(); ?>
