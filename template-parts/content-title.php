<?php
/**
 	Template Part : Title Template
*/

$title_description = get_field('title_description');

?>

<!-- TITLE SECTION
====================================================== -->
<section id="title-panel" data-type="parallax" data-speed-factor="4">
		<div class="container clearfix">
			<div class="col col-sm-5">
				<img class="logo" src="<?php bloginfo('template_directory'); ?>/images/logo-placeholder-2.png" style="max-width: 100%"/>
			</div>
			<div class="col col-sm-7">

				<div class="title-bar">
					<h2><?php bloginfo('name') ?></h2>
					<p class="lead"><?php bloginfo('description') ?></p>
				</div>
				<br/><br/>
				<div class="description-bar">
					<p><?php echo $title_description;	?></p>

					<div class="pull-right">
						<?php get_template_part('template-parts/content', 'socials'); ?>
					</div>

				</div>

			</div>
		</div>
</section>
