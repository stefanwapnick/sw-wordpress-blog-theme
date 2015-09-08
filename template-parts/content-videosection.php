<?php
/**
 	Template Part : Feature Section
*/

$video_section_title = get_field('video_section_title');
$video_section_description = get_field('video_section_description');
$video_section_url = get_field('video_section_url');

$video_placeholder_url = 'https://www.youtube.com/embed/OCWj5xgu5Ng';

?>

<!-- VIDEO SECTION
====================================================== -->
<section id="video-section">
	<div class="container">
		<div class="row text-center">
			<div class="col-sm-8 col-sm-offset-2">


				<div class="title-bar">
					<h2><?php echo $video_section_title; ?></h2>
				</div>

				<div class="description-bar">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
					<?php echo $video_section_description; ?>
				</div>



				<?php if(!empty($video_section_url)): ?>
					<iframe width="100%" height="415px" src="<?php echo $video_section_url;  ?>" frameborder="0" allowfullscreen></iframe>
				<?php else: ?>
					<iframe width="100%" height="415px" src="<?php echo $video_placeholder_url;  ?>" frameborder="0" allowfullscreen></iframe>
				<?php endif; ?>

			</div>
		</div>
	</div>

</section>
