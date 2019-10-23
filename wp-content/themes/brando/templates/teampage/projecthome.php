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
$projectitle = get_sub_field('project_title');

?>

<section class="" style="position:relative;">

<div class="">
    <div class="row d-flex" style="color:#00498d;">
            <div class="col-lg-6 text-center left-content-work-block pt200m100 pb300test" style=" padding-left:50px; padding-right:70px; /* max-width:85%; padding-left:35px;*/ margin-bottom:0px;">
                <div class="project-home-image indicasestudyhideimage" style="margin:0px; float:right;">
                    <?php if($image): ?>
                        <img  style="min-width:350px;" class="img-fluid img-phome" src="<?php echo show_image($image['url'], $image['width'], $image['height']); ?>">
                    <?php endif; ?>
                </div>
                
            </div>
            <div class="col-lg-5 project-home-text pt210m0 /*pb90m50*/ inditeamtext ftmsection resize-text M90L" style="margin-top:0px; padding-left:90px; padding-right:15px;max-width: 550px;">  
                <?php echo $title ? "<div class='inditeamtitle'>{$title}</div>" : '' ?>
                <div class="teampageind-title">
                <?php echo $projectitle ? "{$projectitle}" : '' ?>
                </div>
                <div class="teampageind-content" style="font-size:24px;"><?php echo $content; ?></div>
                <?php echo $contentsmalltext; ?> 
            </div>
    </div>
</div>

<!--<div class="row d-flex indicasepad marginautoindicase" id="marginautoindicase" style="margin-top:50px;">
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
        </div>-->
        <div id="wrapper" class="<?php echo $class; ?>">
        <header id="" class="arrowpos" style="">
            <div id="top" class="container clearfix header-toggle-white header-div" style="margin-left:60px; max-width:2400px; padding-left:0px; padding-right:0px;">
                <a href="#home" id="logo" class="float-left" style="padding-left:15px;">    
                        <a class="leftarrowstyle" style="font-family: Helvetica;color: #00498D!important; text-align: left;" href="<?php echo $previousurl ?>"> <img class="leftarrowmargin" src="../wp-content/themes/brando/assets/images/rightah.png"><?php echo $previoustext ?></a>
                </a>
                    <a class="rightarrowstyle" style="font-family: Helvetica; color: #00498D!important;text-align:right;" href="<?php echo $nexturl ?>"><?php echo $nexttext ?><img class="rightarrowmargin" src="../wp-content/themes/brando/assets/images/leftah.png"></a>

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
