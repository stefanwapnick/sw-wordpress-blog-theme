<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package SW Wordpress Blog Theme
 */

get_header(); ?>

		<section class="feature-image feature-image-default" data-type="parallax" data-speed-factor="4">
			<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'sw-wordpress-blog-theme' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		</section>

		<div class="container">
			<main class="col-sm-8">

				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ){
						the_post();
						get_template_part( 'template-parts/content', 'search' );
					} ?>

					<?php the_posts_navigation(); ?>

				<?php else : ?>
					<?php get_template_part( 'template-parts/content', 'none' ); ?>
				<?php endif; ?>

			</main>
			<aside class="col-sm-4">
				<?php get_sidebar(); ?>
			</aside>
		</div>


<?php get_footer(); ?>
