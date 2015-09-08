<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SW Wordpress Blog Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'sw-wordpress-blog-theme' ); ?></a>

	<!-- NAVBAR
    ====================================================== -->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<!-- NAVBAR HEADER
            ====================================================== -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/"><img src="<?php bloginfo('template_directory'); ?>/images/logo-small-placeholder.png" alt="B2W"></a>
			</div>

			<div></div>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'container' => 'nav',
					'container_class' => 'navbar-collapse collapse',
					'menu_class' => 'nav navbar-nav navbar-right'
				));
			?>

		</div>
	</nav>    <!-- /navbar -->



</div>
