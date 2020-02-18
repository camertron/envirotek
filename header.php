<?php
/**
 * The header for our theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _envirotek
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div>
		<div class="header" role="banner">
			<div class="container">
				<img src="<?php echo get_template_directory_uri(); ?>/img/header-logo.png" class="header-logo" />
			</div>
			<div class="hero">
				<div class="hero-text poiret container">
					<div class="row">
						<p class="hero-text-contents col-lg-6 offset-lg-6 text-center text-lg-right">
							EnviroTek Remediation is building the world's most reliable environmental remediation solutions through leading edge innovations and continuous research and development programs
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
