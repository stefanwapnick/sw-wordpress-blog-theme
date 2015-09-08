<?php
/**
 	Template Part : Text Section 3
*/

$text_template_3_title = get_field('text_template_3_title')
?>

<!-- TEXT TEMPLATE 3
================================================== -->
<section id="text-section-3">
	<div class="container">
		<div class="row">

			<div class="col-sm-8 col-sm-offset-2">
				<h2><?php echo $text_template_3_title; ?></h2>

				<?php $loop = new WP_Query( array( 'post_type' => 'testimonial', 'orderby' => 'post_id', 'order' => 'ASC' )); ?>

				<?php while($loop->have_posts() ) : $loop -> the_post(); ?>
					<div class="row testimonial">
						<div class="col-sm-4 col-sm-push-8">
							<div class="text-center">

							<?php if(has_post_thumbnail()): ?>
								<?php the_post_thumbnail(array(200,200)); ?>
							<?php else: ?>
								<img src="<?php bloginfo('template_directory')?>/images/image-placeholder.png" style="height: 200px; width:200px;"/>
							<?php endif; ?>

							</div>
						</div><!-- end col -->

						<div class="col-sm-8 col-sm-pull-4">
							<blockquote>
								<h4><?php the_title(); ?></h4>
								<?php the_content(); ?>
							</blockquote>
						</div><!-- end col -->
					</div><!-- row -->
				<?php endwhile; wp_reset_query(); ?>

			</div><!-- end col -->

		</div><!-- row -->
	</div><!-- container -->
</section><!-- kudos -->