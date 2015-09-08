<?php
/**
Template Name: Form Page
 */

$thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
?>
<?php get_header(); ?>


<?php if(has_post_thumbnail()) : ?>
	<section class="feature-image feature-image-default" style="background: url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover" data-type="parallax" data-speed-factor="4">
		<h1 class="page-title"><i class="fa fa-send"></i> Contact Form</h1>
	</section>
<?php else: ?>
	<section class="feature-image feature-image-default" data-type="parallax" data-speed-factor="4">
		<h1 class="page-title"><i class="fa fa-send"></i> Contact Form</h1>
	</section>
<?php endif; ?>

<!-- CONTACT FORM
================================================== -->
<section class="section-inverse">
<div class="container">
	<div class="row" id="primary">
		<div id="content" class="col-sm-12">
				<?php while(have_posts()) : the_post(); ?>
					<p class="lead"><?php the_content(); ?></p>
				<?php endwhile; ?>
		</div>
	</div>
</div>


</section>

<?php get_footer(); ?>
