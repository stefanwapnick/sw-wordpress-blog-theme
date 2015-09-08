<?php
/**
 	Template Part : Text Template 1
*/

$text_template_1_title = get_field('text_template_1_title');
$text_template_1_lead = get_field('text_template_1_lead');

?>

<!-- TEXT TEMPLATE 1
====================================================== -->
<section>
	<div class="container text-center">

		<h2><?= $text_template_1_title ?></h2>
		<p class="lead"><?= $text_template_1_lead ?></p>

		<div class="row">

			<?php $loop = new WP_Query(array('post_type' => 'long_feature_section', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
			<?php while($loop->have_posts()) : $loop -> the_post(); ?>

				<div class="col-sm-4 section-image">

					<?php if(has_post_thumbnail()): ?>
						<?php the_post_thumbnail(); ?>
					<?php else: ?>
						<img src="<?php bloginfo('template_directory')?>/images/image-placeholder.png" "/>
					<?php endif; ?>

					<h3><?php the_title(); ?></h3>
					<p><?php the_content(); ?></p>
				</div>
			<?php endwhile; wp_reset_query(); ?>

		</div>
	</div>
</section>
