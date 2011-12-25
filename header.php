<!DOCTYPE html>

<!--
Quantico Wordpress Theme Designed by Josh Wepman
(c) 2011 Josh Wepman CC-BY-NC-ND All Other Rights Reserved
***USE ONLY ALLOWED WITH THIS COPYRIGHT MESSAGE INTACT***

"Quantico: a sleek and slender retro-style wordpress theme"
-->

<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title(); ?> <?php bloginfo( 'name' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Montserrat|Baumans|Cagliostro|Josefin+Slab|Varela+Round|Actor|Syncopate|Lancelot|Antic|Spinnaker|PT+Serif+Caption|Aubrey|Nova+Flat|Ubuntu+Mono|Nova+Round|Forum|Quicksand|Varela|Nova+Slim|Expletus+Sans|Maven+Pro|Andika|Quattrocento|Coda|Comfortaa|Numans|Raleway:100|Josefin+Sans|Cagliostro' type='text/css' media='screen' />
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>
<body>
<header>
<a class="header-link" href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name') ?>"><h1><?php bloginfo( 'name' ); ?></h1>
<aside><div class="header-subtitle"><?php bloginfo('description'); ?></div></aside></a>
</header>
<!-- Site Navigation -->
<nav class="primary-menu">
<?php wp_nav_menu(array('menu' => 'primary-menu', 'container' => false, 'items_wrap' => '%3$s', 'depth' => 1, 'fallback_cb' => 'quantico_empty_menu') ); ?>
</nav>
<script type="text/javascript">
jQuery(document).ready(function() {
  //area 1
  jQuery('.primary-menu').children().hover(function() {
    jQuery(this).siblings().stop().fadeTo(500,0.5);
  }, function() {
    jQuery(this).siblings().stop().fadeTo(500,1);
  });
  //article fade
  jQuery('.main-content-container').children().hover(function() {
    jQuery(this).siblings().stop().fadeTo(500,0.5);
  }, function() {
    jQuery(this).siblings().stop().fadeTo(500,1);
  });
});
</script>
<!--<div class="hr"></div> -->
