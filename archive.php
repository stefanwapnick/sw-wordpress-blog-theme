<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SW Wordpress Blog Theme
 */

get_header(); ?>

		<?php if ( have_posts() ) : ?>

			<section class="feature-image feature-image-default-alt" data-type="parallax" data-speed-factor="4">

				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>

			</section>

			<div class="container">
				<div id="primary" class="row">
					<main id="content" class="col-sm-8">
						<?php while ( have_posts() ) : the_post(); ?>
							<?php
							get_template_part( 'template-parts/content', get_post_format() );
							?>
						<?php endwhile; ?>

						<?php the_posts_navigation(); ?>
					</main>
					<aside class="col-sm-4">
						<?php get_sidebar(); ?>
					</aside>
				</div>
			</div>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>


<?php get_footer(); ?>
