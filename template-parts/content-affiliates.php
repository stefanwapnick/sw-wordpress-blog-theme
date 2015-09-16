<?php
/**
 	Template Part : Affiliates Page
*/

$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

?>

<!-- FEATURE IMAGE HEADER
================================================== -->

	<?php if(has_post_thumbnail()) : ?>
		<section class="feature-image feature-image-default" style="background: url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover" data-type="parallax" data-speed-factor="4">
			<h1 class="page-title"><i class="fa fa-cog"></i> Affiliates</h1>
		</section>
	<?php else: ?>
		<section class="feature-image feature-image-default" data-type="parallax" data-speed-factor="4">
			<h1 class="page-title"><i class="fa fa-cog"></i> Affiliates</h1>
		</section>
	<?php endif; ?>

<!-- AFFILAITES CONTENT
================================================== -->
<section class="section-inverse">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<!-- Insert all posts in affiliates page -->
				<?php while(have_posts()) : the_post(); the_content(); endwhile; ?>

				<br/>
				<div class="resource-row clearfix">

				<?php $loop = new WP_Query( array('post_type' => 'affiliate', 'orderby', 'post_id', 'order' => 'ASC')); ?>

					<?php while($loop->have_posts()) : $loop -> the_post(); ?>

						<div class="col-sm-4">

							<?php get_section_title_image(get_field('affiliate_image')); ?>

							<h3><a href="<?php the_field('affiliate_url'); ?>"> <?php the_title(); ?></a></h3>

							<p><?php the_content(); ?></p>

							<?php if(!empty(get_field('affiliate_button'))) : ?>
								<a href="<?php the_field('affiliate_url'); ?>" class="btn btn-danger btn-block"> <?php the_field('affiliate_button'); ?> </a>
							<?php endif; ?>

						</div>
					<?php endwhile; wp_reset_query(); ?>

				</div>
			</div>

		</div>
	</div>
</section>