<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php wp_title( ' | ', 'false', 'right' ); ?></title>
		
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ; ?>/css/app.css" />
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ; ?>/style.css" />
                <?php 
                $titan = TitanFramework::getInstance('lodse');
                $favicon = $titan->getOption ('favicon');
                $appleicon144 = $titan->getOption ('icon144');
                $appleicon114 = $titan->getOption ('icon114');
                $appleicon72 = $titan->getOption ('icon72');
                $appleicon57 = $titan->getOption ('icon57');
                if (is_numeric($favicon)){
                $favicon = wp_get_attachment_image_src($favicon);
                $favicon = $favicon[0];
                ?>
                <link rel="icon" href="<?php echo $favicon ?>" type="image/x-icon">
                <?php
                }
                if (is_numeric($appleicon144)){
                $appleicon144 = wp_get_attachment_image_src($appleicon144);
                $appleicon144 = $appleicon144[0];
                ?>
                <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $appleicon144 ; ?>">
                <?php 
                } 
                if (is_numeric($appleicon114)){
                $appleicon114 = wp_get_attachment_image_src($appleicon114);
                $appleicon114 = $appleicon114[0];
                ?>
                <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $appleicon114 ; ?>">
                <?php
                }
                if (is_numeric($appleicon72)){
                $appleicon72 = wp_get_attachment_image_src($appleicon72);
                $appleicon72 = $appleicon72[0];
                ?>
                <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $appleicon72 ; ?>">
                <?php
                }
                if (is_numeric($appleicon57)){
                $appleicon57 = wp_get_attachment_image_src($appleicon57);
                $appleicon57 = $appleicon57[0];
                ?>
                <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $appleicon57 ; ?>">
                <?php
                }
                ?>
		<link href='http://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
                 <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
                
                    <?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action('foundationPress_after_body'); ?>
	
	<div class="off-canvas-wrap" data-offcanvas>
	<div class="inner-wrap">
	
	<?php do_action('foundationPress_layout_start'); ?>
	
	<nav class="tab-bar show-for-small-only">
		<section class="left-small">
			<a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
		</section>
		<section class="middle tab-bar-section">
			
			<h1 class="title"><?php bloginfo( 'name' );?></h1>

		</section>
	</nav>

	<?php get_template_part('parts/off-canvas-menu'); ?>

	<?php get_template_part('parts/top-bar'); ?>

<section class="container" role="document">
	<?php do_action('foundationPress_after_header'); ?>