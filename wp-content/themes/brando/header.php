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
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <?php require_once('BFI_Thumb.php'); ?>
        <?php wp_head(); ?>
 
        <!--[if lt IE 9]> <script src="<?php bloginfo('template_directory'); ?>/javascript/html5shiv.js"></script> <![endif]-->
        
    </head>
    <body <?php body_class(); ?>>
        <?php
        $class = '';
        $domainurl = $_SERVER['HTTP_HOST'];
        if(is_singular('work')) $class = 'white-default';
        if(get_sub_field('title') == 'Consultancy'){
            $class = 'white-default';
        }else if(get_sub_field('title') == 'About'){
            $class = 'red-default';
        }
        ?>
        <div id="wrapper" class="<?php echo $class; ?>">
            <header id="header">
                <div class="container clearfix">
                    <a href="#home" id="logo" class="float-left">
                    <img class="white-logo" src="<?php bloginfo('template_url') ?>/assets/images/ERG-logo.png" alt="erg" title="Brando Media" />
                        <img class="red-logo" src="<?php bloginfo('template_url') ?>/assets/images/ERG-logo.png" alt="erg" title="Brando Media" />
                    </a>
                    <?php if(have_rows('content', 2)): ?>
                        <nav id="main-menu" class="float-right">
                            <ul>
                                
                            <li><a href="http://erg.loc:8888/#home">About</a></li>
                            <li><a href="http://erg.loc:8888/#home">Services</a></li>
                            <li><a href="http://erg.loc:8888/#home">Projects</a></li>
                            <li><a href="http://erg.loc:8888/#home">Case Studies</a></li>
                            <li><a href="http://erg.loc:8888/#home">Global</a></li>
                            <li><a href="http://erg.loc:8888/#home">Team</a></li>
                            <li><a href="http://erg.loc:8888/#home">Contact</a></li>
                            </ul>
                        </nav>
                    <?php endif; ?>
                </div>
            </header>