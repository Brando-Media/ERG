<?php 
$image    = get_sub_field('image');
$smallimage    = get_sub_field('smallimage');
$title    = get_sub_field('title');
$content  = get_sub_field('content');
$contentsmalltext  = get_sub_field('content_small_text');
$previoustext = get_sub_field('previous_text');
$previous_url = get_sub_field('previousurl');
$nexttext = get_sub_field('next_text');
$next_url = get_sub_field('nexturl');

?>
<section class="sectionpaddingbt" style="position:relative;">

<div class="">
    <div class="row d-flex" style="color:#00498d; padding-bottom:100px;">
            <div class="col-lg-8 text-center left-content-work-block pt200m100" style=" padding-left:50px; padding-right:70px; /* max-width:85%; padding-left:35px;*/">
                <div class="project-home-image-50vw indicasestudyhideimage" style="margin:0px; float:right;">
                    <?php if($image): ?>
                        <img class="img-fluid img-phome project75vwimage" src="<?php echo show_image($image['url'], $image['width'], $image['height']); ?>">
                    <?php endif; ?>
                </div>
                
            </div>
            <div class="col-lg-4 project-home-text  pt225m0  inditeamtext ftmsection resize-text M90L" style="padding-left:50px; padding-right:15px;margin-top:0px;"> 
                <?php echo $title ? "<div class='indicase-title indicasefontchange'>{$title}</div>" : '' ?>
                <div class="indicase-text" style="">
                <?php echo $projectitle ? "{$projectitle}" : '' ?>
                </div>
                <div class="indicase-text" style="font-size:24px;"><?php echo $content; ?></div>
                <?php echo $contentsmalltext; ?>
            </div>
    </div>
</div>

<div id="wrapper" class="<?php echo $class; ?>">
        <header id="" class="arrowpos" style="">
            <div id="top" class="container clearfix header-toggle-white header-div" style="margin-left:60px; max-width:2400px; padding-left:0px; padding-right:0px;">
                <a href="#home" id="logo" class="float-left" style="padding-left:15px;">    
                        <a class="leftarrowstyle" style="font-family: Helvetica;color: #00498D!important; text-align: left;" href="<?php echo $previous_url ?>"> <img class="leftarrowmargin" src="../wp-content/themes/brando/assets/images/rightah.png"><?php echo $previoustext ?></a>
                </a>
                    <a class="rightarrowstyle" style="font-family: Helvetica; color: #00498D!important;text-align:right;" href="<?php echo $next_url ?>"><?php echo $nexttext ?><img class="rightarrowmargin" src="../wp-content/themes/brando/assets/images/leftah.png"></a>

            </div>
        </header>


<!--<div class="row d-flex indicasepad marginautoindicase" id="marginautoindicase" style="margin-top:50px;">
        <?php if(!empty($previoustext)){ ?> 
            <div class="indicasenavtext col-lg-6 case-prev-container" style="" >
            <div class="proj-prev-text" style=" text-align:left;">
                <a style="font-family: Helvetica;color: #00498D!important; text-align: left;" href="<?php echo $previous_url ?>"><div class="leftindipad" id="leftcasestudyindi" style="text-align: left; padding-left:0px;"> <img class="leftarrowmargin" src="../wp-content/themes/brando/assets/images/rightah.png"><?php echo $previoustext ?></div></a>
            </div>
        </div>
        <?php } ?>
        <?php if(!empty($nexttext)){ ?>
            <div id="" class="indicasenavtext col-lg-5 case-next-container" style="" >
            <div style=" text-align:right;" class="case-next-text">
            <a style="font-family: Helvetica; color: #00498D!important;" href="<?php echo $next_url ?>"><div class="rightindipad" id="rightcasestudyindi" style="text-align: right; padding-right:0px;"> <?php echo $nexttext ?><img class="rightarrowmargin" src="../wp-content/themes/brando/assets/images/leftah.png"></div> </a>
            </div>
            </div>
        <?php } ?>
        </div>-->

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

