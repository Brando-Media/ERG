<?php /*
$image    = get_sub_field('image');
$smallimage    = get_sub_field('smallimage');
$imagePos = get_sub_field('image_position');
$title    = get_sub_field('title');
$content  = get_sub_field('content');
$contentsmalltext  = get_sub_field('content_small_text');
$previoustext = get_sub_field('previous_text');
$previousurl = get_sub_field('previous_url');
$nexttext = get_sub_field('next_text');
$nexturl = get_sub_field('next_url');

?>
<section class="section">

<div class="">
    <div class="row" style="color:#00498d;">
        <?php if($imagePos=='Left'): ?>
            <div class="col-lg-6 text-center align-self-center left-content-work-block" style="padding-left:0px; padding-right:0px;">
                <div class="indicasestudy" >
                    <?php if($image): ?>
                        <img class="img-fluid img-phome" src="<?php echo show_image($image['url'], $image['width'], $image['height']); ?>">
                    <?php endif; ?>
                </div>
                
            </div>
            <div class="col-lg-6 align-self-center right-content-work-block project-home-text" > 
                <?php echo $title ? "<h2 class='title'>{$title}</h2>" : '' ?>
                <div style="font-size:24px;"><?php echo $content; ?></div>
                <?php echo $contentsmalltext; ?>
            </div>
        <?php elseif($imagePos=='Right'): ?>
            <div class="col-lg-6 align-self-center left-content-work-block" style="padding-left:70px;" >
                <?php echo $title ? "<h2 class='title'>{$title}</h2>" : '' ?>
                <div style="font-size:24px;"><?php echo $content; ?></div>
                <?php echo $contentsmalltext; ?>
            </div>
            <div class="col-lg-6 text-center align-self-center right-content-work-block project-home-text" style="padding-left:0px; padding-right:0px;">
                <?php if($image): ?>
                    <img class="img-fluid img-phome content-image" src="<?php echo show_image($image['url'], $image['width'], $image['height']); ?>">
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
<!--
<div class="row d-flex project-home-footer">
    <div class="col-lg-6 align-self-center">
    <?php if(!empty($previoustext)){ ?>
        <a href="<?php echo $previousurl ?>"><?php echo $previoustext ?></a>
    <?php } ?>
    </div>
    <div class="col-lg-6 align-self-center">
    <?php if(!empty($nexttext)){ ?>
        <a href="<?php echo $nexturl ?>"><?php echo $nexttext ?></a>
    <?php } ?>    
    </div>
</div>-->
<div class="row project-home-footer col-lg-6" style="display: -webkit-box; margin:auto; margin-top:10%; margin-bottom:10%;">
    <div class="col-lg-6 align-self-center marginleftproject" style="max-width:50%;">
    <?php if(!empty($previoustext)){ ?>
        <a style="font-family: Helvetica;color: #00498D; width:30%;" href="<?php echo $previousurl ?>"><?php echo $previoustext ?></a>
    <?php } ?>
    </div>
    <div class="col-lg-6 align-self-center">
    <?php if(!empty($nexttext)){ ?>
        <a style="font-family: Helvetica; color: #00498D; width:30%;" href="<?php echo $nexturl ?>"><?php echo $nexttext ?></a>
    <?php } ?>    
    </div>
</div>
</section>*/?>

<?php 
$image    = get_sub_field('image');
$smallimage    = get_sub_field('smallimage');
$imagePos = get_sub_field('image_position');
$title    = get_sub_field('title');
$content  = get_sub_field('content');
$contentsmalltext  = get_sub_field('content_small_text');
$previoustext = get_sub_field('previous_text');
$previousurl = get_sub_field('previous_url');
$nexttext = get_sub_field('next_text');
$nexturl = get_sub_field('next_url');

?>
<section class="">

<div class="">
    <div class="row d-flex" style="color:#00498d;">
            <div class="col-lg-6 text-center left-content-work-block pt200m100" style=" padding-left:50px; padding-right:70px; /* max-width:85%; padding-left:35px;*/">
                <div class="project-home-image indicasestudyhideimage" style="margin:0px; float:right;">
                    <?php if($image): ?>
                        <img style="min-width:350px;" class="img-fluid img-phome" src="<?php echo show_image($image['url'], $image['width'], $image['height']); ?>">
                    <?php endif; ?>
                </div>
                
            </div>
            <div class="col-lg-5 project-home-text pt200m0 inditeamtext ftmsection resize-text M90L" style="margin-top:50px; padding-left:90px; padding-right:15px;"> 
                <?php echo $title ? "<div class='indicase-title indicasefontchange'>{$title}</div>" : '' ?>
                <div class="indicase-text" style="">
                <?php echo $projectitle ? "{$projectitle}" : '' ?>
                </div>
                <div class="indicase-text" style="font-size:24px;"><?php echo $content; ?></div>
                <?php echo $contentsmalltext; ?>
            </div>
    </div>
</div>

<div class="row d-flex indicasepad marginautoindicase" id="marginautoindicase" style="margin-top:50px;">
        <?php if(!empty($previoustext)){ ?> 
            <div class="indicasenavtext col-lg-6 case-prev-container" style="" >
            <div class="case-prev-text" style=" text-align:left;">
                <a style="font-family: Helvetica;color: #00498D!important; text-align: left;" href="<?php echo $previousurl ?>"><div class="leftindipad" id="leftcasestudyindi" style="text-align: left; padding-left:0px;"> <img class="leftarrowmargin" src="../wp-content/themes/brando/assets/images/rightah.png"><?php echo $previoustext ?></div></a>
            </div>
        </div>
        <?php } ?>
        <?php if(!empty($nexttext)){ ?>
            <div id="" class="indicasenavtext col-lg-5 case-next-container" style="" >
            <div style=" text-align:right;" class="case-next-text">
            <a style="font-family: Helvetica; color: #00498D!important;" href="<?php echo $nexturl ?>"><div class="rightindipad" id="rightcasestudyindi" style="text-align: right; padding-right:0px;"> <?php echo $nexttext ?><img class="rightarrowmargin" src="../wp-content/themes/brando/assets/images/leftah.png"></div> </a>
            </div>
            </div>
        <?php } ?>
        </div>

        <header id="" class="arrowpos" style="">
            
                <div id="top" class="container clearfix header-toggle-white header-div" style="margin-left:60px; max-width:2400px; padding-left:0px; padding-right:0px;">
                    <a href="#home" id="logo" class="float-left" style="padding-left:15px;">
                        <img style="max-width:100px; margin-top:6px;" class="white-logo" src="<?php bloginfo('template_url') ?>/assets/images/ERG-logo.png" alt="erg" title="Brando Media" />
                        <img class="red-logo" src="<?php bloginfo('template_url') ?>/assets/images/ERG-logo.png" alt="erg" title="Brando Media" />
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
                    <button id="navbar-header-toggle" onclick="togglemob();" class="navbar-toggler collapsed">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    </nav>
                    
                   <!-- <nav class="navbar navbar-expand-lg navfloat" id="navfloatx">
                    <a class="navbar-brand" href="#"></a>
                    <button id="navbar-header-toggle" onclick="togglemob();" class="navbar-toggler collapsed">
                        <span class="navbar-toggler-icon"></span>
                    </button>-->

                    <div class="collapse navbar-collapse navbaritemz" id="navbarTogglerDemo02" style="min-width:100vw; float:left">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 navbarfr">
                        <li class="nav-item">
                            <a style="color:white; font-weight:bold;"  class="nav-link navhover" onclick="hrefMove('about')" href="https://brando.media/erg/#about/" >About <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a style="color:white; font-weight:bold;" class="nav-link navhover" href="erg/what-we-do">What We Do</a>
                        </li>
                        <li class="nav-item">
                            <a style="color:white; font-weight:bold;" class="nav-link navhover" href="ourfocus">Our Focus</a>
                        </li>
                        <li class="nav-item">
                            <a style="color:white; font-weight:bold;" class="nav-link navhover" href="case-studies">Case Studies</a>
                        </li>
                        <li class="nav-item">
                            <a style="color:white;font-weight:bold;" class="nav-link navhover" onclick="hrefMove('global')" href="https://brando.media/erg/#global/"  >Global</a>
                        </li>
                        <li class="nav-item">
                            <a style="color:white;font-weight:bold;" class="nav-link navhover" href="team-pages">Team</a>
                        </li>
                        <li class="nav-item">
                            <a style="color:white;font-weight:bold;" class="nav-link navhover" onclick="hrefMove('contact')" href="https://brando.media/erg/#contact/"  >Contact</a>
                        </li>
                        </ul>
                    </div>
              <!--      </nav> -->

              <nav class="navbar navbar-expand-lg navfloat" id="navfloatx">
                    <div class="collapse navbar-collapse navbaritemz" id="navbarTogglerDemo02">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 navbarfr">
                        <li class="nav-item">
                            <a style="color:white; font-weight:bold;" class="nav-link navhover" id="aboutnav" onclick="changeNavCol('aboutnav')" href="https://brando.media/erg/#about">About <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a style="color:white; font-weight:bold;" class="nav-link navhover" href="what-we-do">What We Do</a>
                        </li>
                        <li class="nav-item">
                            <a style="color:white; font-weight:bold;" class="nav-link navhover" href="ourfocus">Our Focus</a>
                        </li>
                        <li class="nav-item">
                            <a style="color:white; font-weight:bold;" class="nav-link navhover" href="case-studies">Case Studies</a>
                        </li>
                        <li class="nav-item">
                            <a style="color:white;font-weight:bold;" class="nav-link navhover" id="globalnav" onclick="changeNavCol('globalnav')" href="https://brando.media/erg/#global">Global</a>
                        </li>
                        <li class="nav-item">
                            <a style="color:white;font-weight:bold;" class="nav-link navhover" href="team-pages">Team</a>
                        </li>
                        <li class="nav-item">
                            <a style="color:white;font-weight:bold;" class="nav-link navhover" id="contactnav" onclick="changeNavCol('contactnav')" href="https://brando.media/erg/#contact">Contact</a>
                        </li>
                        </ul>
                    </div>
                    </nav>

                </div>
            </header>

<!--        
<div class="row project-home-footer col-lg-12" style="display: -webkit-box; margin:auto; margin-top:10%; margin-bottom:10%;">
    <div class="col-lg-6 align-self-center marginleftproject" style="max-width:50%;">
    <?php if(!empty($previoustext)){ ?>
        <a style="font-family: Helvetica;color: #00498D!important; width:30%;" href="<?php echo $previousurl ?>"><img src="../../wp-content/themes/brando/assets/images/rightah.png"> <?php echo $previoustext ?></a>
    <?php } ?>
    </div>
    <div class="col-lg-6 align-self-center" style="max-width:50%;">
    <?php if(!empty($nexttext)){ ?>
        <a style="font-family: Helvetica; color: #00498D!important; width:30%;" href="<?php echo $nexturl ?>"><?php echo $nexttext ?> <img src="../../wp-content/themes/brando/assets/images/leftah.png"></a>
    <?php } ?>    
    </div>
</div>-->
</section>

