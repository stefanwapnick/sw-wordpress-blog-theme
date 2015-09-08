<?php
/**
 	Template Part : Feature Section
*/

$text_template_4_title = get_field('text_template_4_title');
$text_template_4_subtitle = get_field('text_template_4_subtitle');
$text_template_4_intro = get_field('text_template_4_intro');
$text_template_4_content = get_field('text_template_4_content');
?>


<!-- TEXT TEMPLATE 4
====================================================== -->
<section id="text-section-4">
	<div class="container">

		<div class="row">
			<div class="col-sm-8 col-sm-offset-4 col-md-6 col-md-offset-6">

				<div class="row">
					<div class="col-lg-7">
						<h2><?= $text_template_4_title ?> <small><?= $text_template_4_subtitle ?></small></h2>
					</div>
					<div class="col-lg-5">
						<!-- Space for background image -->
					</div>
				</div>
				<p class="lead">
					<?= $text_template_4_intro ?>
				</p>
				<p>
					<?= $text_template_4_content ?>
				</p>
				<hr/>

			</div>
		</div>
	</div>
</section>