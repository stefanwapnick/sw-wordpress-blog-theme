<?php
/**
 	Template Part : Socials
*/
?>

<?php $loop = new WP_Query( array( 'post_type' => 'social_icon', 'orderby' => 'post_id', 'order' => 'ASC' )); ?>

<?php while($loop->have_posts() ) : $loop -> the_post(); ?>
	<a href="<?php the_field('icon_url')?>">
		  <span class="fa-stack fa-2x">
			  <i class="fa fa-circle fa-stack-2x"></i>
			  <i class="<?php the_field('icon_type') ?> fa-stack-1x fa-inverse"></i>
		  </span>
	</a>
<?php endwhile; wp_reset_query(); ?>