<?php
/**
 	Template Part : Text Section 2
*/

$text_template_2_title = get_field('text_template_2_title');
$text_template_2_image = get_field('text_template_2_image');
$text_template_2_content = get_field('text_template_2_content');
?>

<!-- TEXT TEMPLATE 2
====================================================== -->
<section id="text-section-2">
	<div class="container">
		<div class="text-center section-image">

			<?php get_section_title_image($text_template_2_image); ?>

			<h2><?php echo $text_template_2_title; ?></h2>
		</div>

		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<?php echo $text_template_2_content; ?>
			</div>
		</div>

	</div>
</section>