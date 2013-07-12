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

<title>
<?php 
	if( is_404() ) echo 'P&aacute;gina n&atilde;o encontrada | ' . get_bloginfo('name');
	else wp_title( '|', true, 'right' );
?>
</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon.png">
<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->
<?php wp_head(); ?>
<script type="text/javascript" src="http://barra.ne10.uol.com.br/parceiro/gastro-online-111.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42528965-1', 'gastroonline.com.br');
  ga('send', 'pageview');
</script>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<img id="logo" class="site-branding" src="<?php echo get_template_directory_uri(); ?>/assets/logo.svg" alt="Gastro Online logo" />
				<h1 class="site-description site-branding"><?php bloginfo( 'description' ); ?></h1>
				<img id="cachecol" class="site-branding" src="<?php echo get_template_directory_uri(); ?>/assets/cachecol.png" alt="imagem cachecol">
			</a>			
	</header><!-- #masthead -->	

	<div id="main" class="site-main">