<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SW Wordpress Blog Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!-- Header Section of Post -->
	<header class="entry-header">
		<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
		<?php if ( 'post' === get_post_type() ) : ?>

			<div class="post-details">
				<i class="fa fa-user"></i> <?php the_author(); ?>
				<i class="fa fa-clock-o"></i> <?php the_date(); ?>
				<i class="fa fa-folder"></i> <?php the_category(', '); ?>
				<i class="fa fa-tags"></i> <?php the_tags(); ?>

				<div class="post-comments-badge">
					<a href="<?php comments_link(); ?>"><i class="fa fa-comments"></i> <?php comments_number(0,1,'%') ?> </a>
				</div><!-- post-comments-badge -->

				<div><?php edit_post_link('Edit', '<div class="fa fa-pencil">', '</div>' ); ?></div>

			</div><!-- post-details -->

		<?php endif; ?>
	</header>

	<!-- Image -->
	<?php if(has_post_thumbnail()) : ?>
		<div class="post-image">
			<?php the_post_thumbnail(); ?>
		</div><!-- post-image -->
	<?php endif; ?>

	<!-- Footer -->
	<footer>
		<?php the_excerpt(); ?>
	</footer>

</article>


