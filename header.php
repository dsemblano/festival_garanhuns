<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package garanhuns
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">		
				<?php $header_image = get_header_image();
				if ( ! empty( $header_image ) ) { ?>
				<img id="logo" class="site-branding" src="<?php header_image(); ?>" alt="Gastro Online logo" />
				<?php } ?>
				<h2 class="site-description site-branding"><?php bloginfo( 'description' ); ?></h2>		
				<img id="cachecol" class="site-branding" src="<?php echo get_template_directory_uri(); ?>/assets/cachecol.png" alt="imagem cachecol">
			</a>
	</header><!-- #masthead -->	

	<div id="main" class="site-main">