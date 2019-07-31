<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta http-equiv="X-UA-Compatible" content="chrome=1">
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php bloginfo('name'); ?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>">
        
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen">
        <link rel="alternate" type="text/xml" title="<?php bloginfo('name'); ?> RSS 0.92 Feed" href="<?php bloginfo('rss_url'); ?>">
        <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>">
        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS 2.0 Feed" href="<?php bloginfo('rss2_url'); ?>">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/assets/css/main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <?php require_once('BFI_Thumb.php'); ?>
        <?php wp_head(); ?>
 
        <!--[if lt IE 9]> <script src="<?php bloginfo('template_directory'); ?>/javascript/html5shiv.js"></script> <![endif]-->
        
    </head>
    <body <?php body_class(); ?>>
        <?php
        $class = '';
        $domainurl = $_SERVER['HTTP_HOST']; 
        
        ?> 
        <div id="wrapper" class="<?php echo $class; ?>">
            <header id="header">
                <div class="container clearfix">
                    <a href="#home" id="logo" class="float-left">
                        <img class="white-logo" src="<?php bloginfo('template_url') ?>/assets/images/ERG-logo.png" alt="erg" title="Brando Media" />
                        <img class="red-logo" src="<?php bloginfo('template_url') ?>/assets/images/ERG-logo.png" alt="erg" title="Brando Media" />
                    </a>
                    <?php if(have_rows('content', 2)): ?>
                        <nav id="main-menu" class="float-right erg-h topnav">
                            <ul class="header__list" id="ul-menu">  
                            <li class="header__list-item"><a class="hover-underline-link about-link" href="#about-nathalie">ABOUT</a></li>
                            <li class="header__list-item"><a class="hover-underline-link about-link" href="#about-nathalie">NEWS</a></li>
                            <li class="header__list-item"><a class="hover-underline-link about-link" href="#about-nathalie">MENU</a></li>
                            </ul>
                        </nav>
                        <div class="float-right erg-h topnav mob-white" id="mobshow" style="right:20px; position:absolute;">
                            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </header>

            