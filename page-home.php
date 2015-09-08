<?php
/**
	Template Name: Home Page
 */

?>

<?php get_header(); ?>

	<?php get_template_part('template-parts/content', 'title'); ?>

	<?php get_template_part('template-parts/content', 'features'); ?>

	<?php get_template_part('template-parts/content', 'textsection1'); ?>

	<?php get_template_part('template-parts/content', 'textsection2'); ?>

	<?php get_template_part('template-parts/content', 'videosection'); ?>

	<?php get_template_part('template-parts/content', 'textsection3'); ?>

	<?php get_template_part('template-parts/content', 'textsection4'); ?>

	<?php get_template_part('template-parts/content', 'features'); ?>

<?php get_footer(); ?>
