<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SW Wordpress Blog Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!-- Image -->
	<?php if(has_post_thumbnail()) : ?>
		<div class="post-image">
			<?php the_post_thumbnail(); ?>
		</div><!-- post-image -->
	<?php endif; ?>

	<!-- Header Section of Post -->
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<?php if ( 'post' === get_post_type() ) : ?>

			<div class="post-details">

				<div class="post-label top-left-label"><i class="fa fa-user"></i> <?php the_author(); ?></div>
				<div class="post-label top-right-label"><i class="fa fa-clock-o"></i> <?php the_date(); ?></div>
				<div class="post-comments-badge">
					<a href="<?php comments_link(); ?>"><i class="fa fa-comments"></i> <?php comments_number(0,1,'%') ?> </a>
				</div>
				<?php edit_post_link('<i class="fa fa-pencil fa-2x"></i>', '<div class="post-comments-badge low-badge">', '</div>' ); ?>

				<?php the_excerpt(); ?>

			</div><!-- post-details -->

		<?php endif; ?>
	</header>

	<footer style="background: gray; color: white;">
		<i class="fa fa-folder"></i> <?php the_category(', '); ?>

		<?php if(has_tag()) : ?>
			<i class="fa fa-tags"></i> <?php the_tags(); ?>
		<?php endif; ?>
	</footer>


</article>
