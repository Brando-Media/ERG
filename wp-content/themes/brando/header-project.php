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

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
   
   <header id="header" style="margin-right:7%;">
   
       <div class="container clearfix header-toggle-white header-div"  style="margin-top:20px; margin-left:60px; max-width:2400px; padding-left:0px; padding-right:0px;">
           <a href="http://brando.media/erg#home" id="logo" class="float-left" style="padding-left:15px;">
               <img id="blueerglogo" style="max-width:100px; margin-top:6px;" class="white-logo" src="<?php bloginfo('template_url') ?>/assets/images/ergblue200.png" alt="erg" title="Brando Media" />
               <img class="red-logo" src="<?php bloginfo('template_url') ?>/assets/images/ergblue200.png" alt="erg" title="Brando Media" />
           </a>
           <!--<nav class="navbar navbar-expand-lg navbar-light navbar-brand" >
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
               <div class="navbar-nav">
               <a style="color:white;" class="nav-item nav-link active hover-underline-link about-link" href="#">Home</a>
               <a style="color:white;"  class="nav-item nav-link hover-underline-link about-link" href="#">Features</a>
               <a style="color:white;" class="nav-item nav-link hover-underline-link about-link" href="#">Pricing</a>
               </div>
           </div>
           </nav> -->
           
           <nav class="navbar navbar-expand-lg navfloat" id="navfloatx">
           <a class="navbar-brand" href="#"></a>
          <!-- <button id="navbar-header-toggle" onclick="togglemob();" class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">-->
           <button id="navbar-header-toggle" onclick="togglemob();" class="collapsed navbar-toggler">
   
               <span id="blueiconclass" class="navbar-toggler-icon icon-blue"></span>
           </button>
            </nav>

           <div class="collapse navbar-collapse navbaritemz" id="navbarTogglerDemo02" style="padding-top:80px; min-width:100vw; float:left;">
               <ul class="navbar-nav mr-auto mt-2 mt-lg-0 navbarfr">
               <li class="nav-item">
                   <a class="nav-link bluenav" href="https://brando.media/erg/#about">About <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                   <a style="" class="nav-link bluenav" href="https://brando.media/erg/what-we-do">What We Do</a>
               </li>
               <li class="nav-item">
                   <a  class="nav-link bluenav" href="https://brando.media/erg/work/sectors">Sectors</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link bluenav" href="http://brando.media/erg/case-studies/">Case Studies</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link bluenav" href="https://brando.media/erg/#global">Global</a>
               </li>
               <li class="nav-item">
                   <a  class="nav-link bluenav" href="https://brando.media/erg/team-pages">Team</a>
               </li>
               <li class="nav-item">
                   <a  class="nav-link bluenav" href="https://brando.media/erg/#contact">Contact</a>
               </li>
               </ul>
           </div>
          <!-- </nav>-->

          <nav class="navbar navbar-expand-lg navfloat" id="navfloatx">

        <div class="collapse navbar-collapse navbaritemz" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 navbarfr">
            <li class="nav-item">
                <a style="font-weight:bold;" id="aboutlink" class="nav-link navhover bluenav" href="https://brando.media/erg/#about">About <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a style="font-weight:bold;" id="serviceslink" class="nav-link navhover bluenav" href="https://brando.media/erg/what-we-do/">What We Do</a>
            </li>
            <li class="nav-item">
                <a style=" font-weight:bold;" id="projectslink" class="nav-link navhover bluenav" href="https://brando.media/erg/work/sectors/">Sectors</a>
            </li>
            <li class="nav-item">
                <a style=" font-weight:bold;" id="casestudieslink" class="nav-link navhover bluenav" href="http://brando.media/erg/case-studies/">Case Studies</a>
            </li>
            <li class="nav-item">
                <a style="font-weight:bold;" id="globallink" class="nav-link navhover bluenav" href="https://brando.media/erg/#global">Global</a>
            </li>
            <li class="nav-item">
                <a style="font-weight:bold;" id="teamlink" class="nav-link navhover bluenav" href="https://brando.media/erg/team-pages/">Team</a>
            </li>
            <li class="nav-item">
                <a style="font-weight:bold;" id="contactlink" class="nav-link navhover bluenav" href="https://brando.media/erg/#contact">Contact</a>
            </li>
            </ul>
        </div>
        </nav>

<!--
           
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
           <?php endif; ?>-->
       </div>
   </header>