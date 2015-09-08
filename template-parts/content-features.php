<?php
/**
 	Template Part : Feature Section
*/

$feature_section_title = get_field('feature_section_title');
$feature_section_image = get_field('feature_section_image');
?>

<!-- FEATURES SECTION
====================================================== -->
<section id="feature-section">
	<div class="container">

		<!--
		<div class="text-center section-image">
			<h3><?= $feature_section_title ?></h3>
		</div>		-->

		<div class="row text-center">

			<?php $loop = new WP_Query( array( 'post_type' => 'feature_section_icon', 'orderby' => 'post_id', 'order' => 'ASC' )); ?>

			<?php while($loop->have_posts() ) : $loop -> the_post(); ?>

				<?php if($loop->current_post % 3 == 0):  ?>
					<div class="col-sm-6">
				<?php endif; ?>

					<div class="col-xs-4">
						<i class="<?php the_field('feature_section_radio'); ?>"></i>
						<h4><?php the_title(); ?></h4>
					</div>

				<?php if($loop->current_post % 3 == 2):  ?>
					</div>
				<?php endif; ?>

			<?php endwhile;?>

			<?php if($loop->post_count % 3 != 0): ?>
				</div>
			<?php endif; ?>

			<?php wp_reset_query(); ?>

		</div>


	</div>
</section>
