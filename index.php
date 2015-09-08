<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SW Wordpress Blog Theme
 */

get_header(); ?>

	<section class="feature-image feature-image-default-alt" data-type="parallax" data-speed-factor="4">
		<h1 class="page-title"><i class="fa fa-pencil"></i> Blog Page</h1>
	</section>

	<!-- BLOG CONTENT
	================================================== -->
	<div class="container">
		<div class="row blog-content" id="primary">
			<main id="content" class="col-sm-8" role="main">

				<?php if ( have_posts() ) : ?>

					<?php if ( is_home() && ! is_front_page() ) : ?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
					<?php endif; ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php  get_template_part( 'template-parts/content', get_post_format() ); ?>

					<?php endwhile; ?>

					<?php the_posts_navigation(); ?>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>

			</main>
			<aside class="col-sm-4">
				<?php get_sidebar(); ?>
			</aside>


		</div>

	</div>

<?php get_footer(); ?>
