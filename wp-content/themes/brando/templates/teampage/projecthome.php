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
<section class="section">

<div class="">
    <div class="row d-flex" style="color:#00498d;">
        <?php if($imagePos=='Left'): ?>
            <div class="col-lg-6 text-center align-self-center left-content-work-block teammemberhome pt200m100" style="padding-left:50px; padding-right:70px; /* max-width:85%; padding-left:35px;*/">
                <div class="project-home-image" >
                    <?php if($image): ?>
                        <img style="min-width:80%; max-width:400px;" class="img-fluid timg-phome" src="<?php echo show_image($image['url'], $image['width'], $image['height']); ?>">
                    <?php endif; ?>
                </div>
                
            </div>
            <div class="col-lg-6 pt200m0 align-self-center project-home-text inditeamtext ftmsection resize-text" style="margin-top:50px; padding-left:50px; padding-right:15px;"> 
                <?php echo $title ? "<div class='inditeamtitle'>{$title}</div>" : '' ?>
                <div class="teampageind-title">
                <?php echo $projectitle ? "{$projectitle}" : '' ?>
                </div>
                <div class="teampageind-content" style="font-size:24px;"><?php echo $content; ?></div>
                <?php echo $contentsmalltext; ?>
            </div>
        <?php elseif($imagePos=='Right'): ?>
            <div class="col-lg-6 align-self-center left-content-work-block" style="padding-left:70px;" >
                <?php echo $title ? "<div class='inditeamtitle'>{$title}</div>" : '' ?>
                <div style="font-size:24px;"><?php echo $content; ?></div>
                <?php echo $contentsmalltext; ?>
            </div>
            <div class="col-lg-6 text-center align-self-center right-content-work-block project-home-text" style="padding-left:0px; padding-right:0px;">
                <?php if($image): ?>
                    <img style="min-width:80%; max-width:400px;" class="img-fluid timg-phome content-image" src="<?php echo show_image($image['url'], $image['width'], $image['height']); ?>">
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
<!--
<div class="row project-home-footer col-lg-6" style="display: -webkit-box; margin:auto; margin-top:10%; margin-bottom:10%;">
    <div class="col-lg-6 align-self-center marginleftproject" style="max-width:50%;">
    <?php if(!empty($previoustext)){ ?>
        <a style="font-family: Helvetica;color: #00498D; width:30%;" href="<?php echo $previousurl ?>"><img src="../../wp-content/themes/brando/assets/images/rightah.png"> <?php echo $previoustext ?></a>
    <?php } ?>
    </div>
    <div class="col-lg-6 align-self-center" style="max-width:50%;">
    <?php if(!empty($nexttext)){ ?>
        <a style="font-family: Helvetica; color: #00498D; width:30%;" href="<?php echo $nexturl ?>"><?php echo $nexttext ?> <img src="../../wp-content/themes/brando/assets/images/leftah.png"></a>
    <?php } ?>    
    </div>
</div>-->

<div class="row project-home-footer col-lg-12" style="display: -webkit-box; margin:auto; margin-top:10%;">
    <div class="col-lg-6 align-self-center marginleftproject teamhomearrows" style="max-width:50%;">
    <?php if(!empty($previoustext)){ ?>
    <?php } ?>
        </div>
    <div class="col-lg-6 align-self-center" style="max-width:50%;">
    <?php if(!empty($nexttext)){ ?>
    <?php } ?>
        
    </div>
</div>
<div class="row d-flex casenavhide indicasepad marginautoindicase" id="marginautoindicase" style="margin:auto;">
        <?php if(!empty($previoustext)){ ?> 
            <div class="indicasenavtext" style="width:50vw;" >
                <a style="font-family: Helvetica;color: #00498D!important;" href="<?php echo $previousurl ?>"><div class="leftindipad" id="leftinditeam"> <img src="../../wp-content/themes/brando/assets/images/rightah.png"> <?php echo $previoustext ?></div></a>
            </div>
        <?php } ?>
        <?php if(!empty($nexttext)){ ?>
            <div id="" class="indicasenavtext" style="width:50vw;" >
            <a style="font-family: Helvetica; color: #00498D!important;" href="<?php echo $nexturl ?>"><div class="rightindipad" id="rightinditeam"> <?php echo $nexttext ?> <img src="../../wp-content/themes/brando/assets/images/leftah.png"></div> </a>
            </div>
        <?php } ?>
        </div>
</section>